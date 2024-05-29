<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(){
        return view('admin.pages.files.index');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'file'=>'required|mimes:pdf'
        ]);
        
    }

}
