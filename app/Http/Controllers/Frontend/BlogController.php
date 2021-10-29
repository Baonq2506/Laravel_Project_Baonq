<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
class BlogController extends Controller
{
    public function index(){
       $categories= Category::all();
       $posts= Post::paginate(9);

        return view('frontend.blogs.index',[
            'categories'=>$categories,
            'posts'=>$posts,
        ]);
    }

    public function show($lub_cate,$slug,$id){

        $post= Post::find($id);
        // dd($post->category->name);
        $count=Post::all()->countBy('category_id');
        $categories= Category::all();
        $tags=Tag::all();
        $postnews=Post::orderby('id', 'DESC')->oldest()->take(4)->get();

        return view('frontend.blogs.singerBlog',[
            'post'=>$post,
            'categories'=>$categories,
            'tags'=>$tags,
            'posts'=>$count,
            'postnew'=>$postnews,
        ]);
    }

    public function showCategory($slug){
        $cate=Category::where('slug',$slug)->first();
        $posts= Post::where('category_id',$cate->id)->paginate(2);
        $count=Post::all()->countBy('category_id');
        $categories= Category::all();
        $tags=Tag::all();
        $postnews=Post::oldest()->take(4)->get();
        return view('frontend.blogs.category',[
        'posts'=>$posts,
        'categories'=>$categories,
        'tags'=>$tags,
        'cate_count'=>$count,
        'postnew'=>$postnews,
       ]);
    }
}