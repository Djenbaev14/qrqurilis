<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus=Menu::orderBy( 'created_at', 'desc')->get();
        $items=Item::orderBy( 'created_at', 'desc')->get();
        return view('admin.home',compact('menus','items'));
    }
}
