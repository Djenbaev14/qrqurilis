<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts=Post::orderBy('id','desc')->paginate(20);
        return view('admin.pages.posts.index',compact('posts'));
    }

    public function create(){
        $pages=Item::all();
        return view('admin.pages.posts.create',compact('pages'));
    }

    public function store(Request $request){
        $request->validate([
            'title_uz'=>'required',
            'title_ru'=>'required',
            'title_qr'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg'
        ]);

        $file =$request->file('image');
        $filename = $file->getClientOriginalName(); 
        $file->move(public_path('uploads/'), $filename);

        
        $slug_qr = Str::slug($request->title_qr);
        $slug_ru = Str::slug($request->title_ru);
        $slug_uz = Str::slug($request->title_uz);
        $count_qr = Post::where('slug_qr', 'LIKE', "{$slug_qr}%")->count();
        $count_ru = Post::where('slug_ru', 'LIKE', "{$slug_ru}%")->count();
        $count_uz = Post::where('slug_uz', 'LIKE', "{$slug_uz}%")->count();
        $slug_qr = $count_qr ? "{$slug_qr}-{$count_qr}" : $slug_qr;
        $slug_ru = $count_ru ? "{$slug_ru}-{$count_ru}" : $slug_ru;
        $slug_uz = $count_uz ? "{$slug_uz}-{$count_uz}" : $slug_uz;

        DB::beginTransaction();
        try {

            $post = new Post();
            $post->user_id = auth()->user()->id;
            $post->category_id = 1;
            $post->title_qr = $request->title_qr;
            $post->body_qr = $request->body_qr;
            $post->title_ru = $request->title_ru;
            $post->body_ru = $request->body_ru;
            $post->title_uz = $request->title_uz;
            $post->body_uz = $request->body_uz;
            $post->slug_ru = $slug_ru;
            $post->slug_qr = $slug_qr;
            $post->slug_uz = $slug_uz;
            $post->image=$filename;
            $post->save();
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return 1;
            // alert()->error('Пост не создано');
            // return redirect()->route('dashboard.post.index');
        }

        alert()->success('Пост успешно создан');
        
        return redirect()->route('dashboard.post.index');
    }

    public function edit(Post $post){
        return view('admin.pages.posts.edit',compact('post'));
    }

    public function update(Request $request,Post $post){
        $request->validate([
            'item_id'=>'required|numeric',
            'body_uz'=>'required',
            'body_ru'=>'required',
            'body_qr'=>'required',
            ]);
            if(Item::find($request->item_id)->type->name != 'Пост'){
                $slug_qr = Str::slug($request->title_qr);
                $slug_ru = Str::slug($request->title_ru);
                $slug_uz = Str::slug($request->title_uz);
                $count_qr = Post::where('slug_qr', 'LIKE', "{$slug_qr}%")->count();
                $count_ru = Post::where('slug_ru', 'LIKE', "{$slug_ru}%")->count();
                $count_uz = Post::where('slug_uz', 'LIKE', "{$slug_uz}%")->count();
                $slug_qr = $count_qr ? "{$slug_qr}-{$count_qr}" : $slug_qr;
                $slug_ru = $count_ru ? "{$slug_ru}-{$count_ru}" : $slug_ru;
                $slug_uz = $count_uz ? "{$slug_uz}-{$count_uz}" : $slug_uz;
            }
            
            $post->user_id = auth()->user()->id;
            $post->item_id = $request->item_id;
            $post->title_qr = $request->title_qr;
            $post->body_qr = $request->body_qr;
            $post->title_ru = $request->title_ru;
            $post->body_ru = $request->body_ru;
            $post->title_uz = $request->title_uz;
            $post->body_uz = $request->body_uz;
            if(Item::find($request->item_id)->type->name != 'Пост'){
                $post->slug_ru = $slug_ru;
                $post->slug_qr = $slug_qr;
                $post->slug_uz = $slug_uz;
            }
            $post->save();
    
            toast('Пост успешно создан','success');
            
            return redirect()->route('dashboard.post.index');
    }

    public function destroy(Post $post){
        $post->delete();

        toast('Пост успешно удалено','success');
        return redirect()->route('dashboard.post.index');
    }
}
