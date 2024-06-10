<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(){
        $files=File::orderBy('id','desc')->get();
        return view('admin.pages.files.index',compact('files'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'file'=>'required|mimes:pdf'
        ]);
        
        $file =$request->file('file');
        $filename = $file->getClientOriginalName(); 
        $file->move(public_path('documents/'), $filename);
        
        $files = new File();
        $files->user_id = auth()->user()->id;
        $files->name = $request->name;
        $files->file=$filename;
        $files->save();

        toast('Файл успешно создан','success');
        
        return redirect()->route('dashboard.file.index')->with('success', 'Файл успешно создан');
    }

}
