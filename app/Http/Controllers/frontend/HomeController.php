<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    
    public function home(){
            $menus=Menu::orderBy('created_at','desc')->get();
        $items=Item::all();
        $categories=Category::orderBy('created_at','desc')->get();
        $posts=Post::orderBy('created_at','desc')->limit(8)->get();
        Session::put("locale",config('app.locale'));
        $title='title_'.session()->get('locale');
        $body='body_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');

        // Session::forget('locale');
        return view('frontend.home',compact('menus','items','title','body','slug','posts','categories'));
    }

    public function page1($m,$i){
        $menus=Menu::orderBy('created_at','desc')->get();
        $items=Item::all();
        $categories=Category::orderBy('created_at','desc')->get();
        
        
        $title='title_'.session()->get('locale');
        $body='body_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');

        $menu=Menu::whereHas('item', function($q) use ($m) {
            $q->where('slug',$m);})->first();
        $item=Item::where('slug',$i)->first();

        return view('frontend.pages.page1',compact('menus','categories','items','title','body','slug','menu','item'));
    }

    public function page2($m){
        $menus=Menu::orderBy('created_at','desc')->get();
        $items=Item::all();
        $categories=Category::orderBy('created_at','desc')->get();

        
        $title='title_'.session()->get('locale');
        $body='body_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');

        if(Category::where('slug',$m)->exists()){
            $category= Category::where('slug',$m)->first();
            $category->setRelation('post', $category->post()->paginate(2));
            return view('frontend.pages.news.all-news',compact('menus','categories','items','title','body','slug','category'));
        }elseif(Menu::whereHas('item', function($q) use ($m) {
            $q->where('slug',$m);})->exists()){
                $menu=Menu::whereHas('item', function($q) use ($m) {
                    $q->where('slug',$m);})->first();
                return view('frontend.pages.page2',compact('menus','categories','items','title','body','slug','menu'));
        }
        
    }

    public function new($s){
        $menus=Menu::orderBy('created_at','desc')->get();
        $items=Item::all();
        $categories=Category::orderBy('created_at','desc')->get();

        
        $title='title_'.session()->get('locale');
        $body='body_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');

        $post=Post::where($slug,$s)->first();
        return view('frontend.pages.news.new',compact('menus','categories','items','title','body','slug','post'));
    }

    
}
