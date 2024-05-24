<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Menu_item;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    
    public function index(){
        $items=Item::orderBy('created_at','desc')->get();
        $menus=Menu::orderBy('created_at','desc')->get();
        return view('admin.pages.menus.index',compact('items','menus'));
    }
    public function item_add(Request $request){
        $request->validate([
            'items'=>'array'
        ]);
        
        if($request->items){
            $menus=json_decode(json_encode(Menu::pluck('id')),true);
            
            $imenu=[];
            foreach($request->items as $menu => $item){
                array_push($imenu,$menu);
            }

            for ($i=0; $i < count($menus); $i++) { 
                if(!in_array($menus[$i],$imenu)){
                    Menu_item::where('menu_id',$menus[$i])->delete();
                }
            }
            
            foreach ($request->items as $menu=> $item) {

                if(in_array($menu,$menus)){
                    
                    $a=json_decode(json_encode(Menu_item::where('menu_id',$menu)->pluck('item_id')),true);
                    $b=$item;
                    $n = count($a);
                    $m = count($b);
                    if($m >0){
                        for ( $i = 0; $i < $n; $i++)
                        {
                            $j;
                            for ($j = 0; $j < $m; $j++)
                                if ($a[$i] == $b[$j])
                                    break;
    
                            if ($j == $m)
                                Menu_item::where('menu_id',$menu)->where('item_id',$a[$i])->delete();
                    
                        }
                    }else{
                        Menu_item::where('menu_id',$menu)->delete();
                    }
    
    
                    for ($i=0; $i < count($item); $i++) {
                        if($item[$i] != Menu::find($menu)->item_id){
                            if(!Menu_item::where('menu_id',$menu)->where('item_id',$item[$i])->exists()){
                                    Menu_item::create([
                                        'menu_id'=>$menu,
                                        'item_id'=>$item[$i]
                                    ]);
                            } 
                        }
    
                        // if(in_array($item[$i],json_decode(json_encode(Menu_item::where('menu_id',$menu)->pluck('item_id')),true))){
    
                        // }
                    }
                }
            }
        }
        else{
            Menu_item::whereNotNull('id')->delete();
            toast('Меню','success');
            return redirect()->route('dashboard.menu.index');
        }
        // for ($i=0; $i < count($request->items); $i++) { 
        //     Menu_item::create([
        //         'menu_id'=>$menu->id,
        //         'item_id'=>$request->items[$i]
        //     ]);
        // }
        toast('Меню успешно создано!','success');
        return redirect()->route('dashboard.menu.index');
    }
    public function create(){
        $menus=Menu::orderBy( 'created_at', 'desc')->get();
        $items=Item::orderBy( 'created_at', 'desc')->get();
        return view('admin.pages.menus.create',compact('menus','items'));
    }

    public function store(Request $request){
        $request->validate([
            'items'=>'array'
        ]);
        for ($i=0; $i < count($request->items); $i++) { 
            Menu::create([
                'item_id'=>$request->items[$i]
            ]);
        }
        toast('Меню успешно создан','success');
        return redirect()->route('dashboard.menu.index');
    }

    public function edit(Menu $menu){
        $items_count=Item::where('menu_id',$menu->id)->count();
        return view('admin.pages.menus.edit',compact('menu','items_count'));
    }

    public function update(Request $request,Menu $menu){
        $request->validate([
            'title_ru'=>'required',
            'title_qr'=>'required',
            'title_uz'=>'required',
        ]);

        
        $slug_qr = Str::slug($request->title_qr);
        $slug_uz = Str::slug($request->title_uz);
        $slug_ru = Str::slug($request->title_ru);
        $count_uz = Menu::where('slug_uz', 'LIKE', "{$slug_uz}%")->count();
        $count_ru = Menu::where('slug_ru', 'LIKE', "{$slug_ru}%")->count();
        $count_qr = Menu::where('slug_qr', 'LIKE', "{$slug_qr}%")->count();
        $slug_qr = $count_qr ? "{$slug_qr}-{$count_qr}" : $slug_qr;
        $slug_uz = $count_uz ? "{$slug_uz}-{$count_uz}" : $slug_uz;
        $slug_ru = $count_ru ? "{$slug_ru}-{$count_ru}" : $slug_ru;

        $menu->title_qr = $request->title_qr;
        $menu->slug_qr = $slug_qr;
        $menu->title_ru = $request->title_ru;
        $menu->slug_ru = $slug_ru;
        $menu->title_uz = $request->title_uz;
        $menu->slug_uz = $slug_uz;
        $menu->type = ($request->type ? $request->type: $menu->type);
        $menu->user_id = 1;
        $menu->save();
        toast('Меню успешно изменение','success');
        return redirect()->route('dashboard.menu.index');
    }
}