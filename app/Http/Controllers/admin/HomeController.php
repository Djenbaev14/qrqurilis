<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Menu_item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus=Menu::orderBy( 'created_at', 'desc')->get();
        $items=Item::orderBy( 'created_at', 'desc')->get();
        return view('admin.home',compact('menus','items'));
    }
    public function search(Request $request){
        
        $search = request('search'); // Qidiruv so'zi kelayotgan so'rov
        $item = Item::where('title_qr', 'LIKE', "%{$search}%")
            ->orWhere('title_uz', 'LIKE', "%{$search}%")
            ->orWhere('title_ru', 'LIKE', "%{$search}%")
            ->first();
        if($item){
            if(Menu_item::where('item_id',$item->id)->exists()){
                $menu_item=Menu_item::where('item_id',$item->id)->first();
                return redirect()->route('page-1',[$menu_item->menu->item->slug,$item->slug]);
            }
        }else{
            return redirect('/');
        }
    }
}
