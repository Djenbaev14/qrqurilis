<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Type;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    
    public function index(){
        $pages=Item::orderBy('created_at','desc')->get();
        return view('admin.pages.pages.index',compact('pages'));
    }
    public function create(){
        $items=Item::orderBy( 'created_at', 'desc')->get();
        return view('admin.pages.pages.create',compact('items'));
    }
    

    public function store(Request $request){
        $request->validate([
            'title_ru'=>'required',
            'title_qr'=>'required',
            'title_uz'=>'required',
            'slug'=>'required',
        ]);

        $item = new Item();
        $item->title_qr = $request->title_qr;
        $item->body_qr = $request->body_qr;
        $item->title_ru = $request->title_ru;
        $item->body_ru = $request->body_ru;
        $item->title_uz = $request->title_uz;
        $item->body_uz = $request->body_uz;
        $item->slug = $request->slug;
        $item->user_id = auth()->user()->id;
        $item->save();

        toast('Страницу успешно создан','success');
        
        return redirect()->route('dashboard.pages.index')->with('success', 'Страницу успешно создан');
    }

    public function edit(Item $page){
        return view('admin.pages.pages.edit',compact('page'));
    }

    public function update(Request $request,Item $page){
        $request->validate([
            'title_ru'=>'required',
            'title_qr'=>'required',
            'title_uz'=>'required',
        ]);
        
        $page->title_qr = $request->title_qr;
        $page->title_ru = $request->title_ru;
        $page->title_uz = $request->title_uz;
        $page->body_qr = $request->body_qr;
        $page->body_ru = $request->body_ru;
        $page->body_uz = $request->body_uz;
        $page->slug = $request->slug;
        $page->user_id = auth()->user()->id;
        $page->save();
        toast('Страницу успешно изменение','success');
        return redirect()->route('dashboard.pages.index');
    }
    public function destroy(Request $request,Item $page){
        $page->delete();
        toast('Страницу успешно удалено','success');
        return redirect()->route('dashboard.pages.index');
    }
}

