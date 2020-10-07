<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::where('is_published','1')->paginate(6);
        return view('client.index')->with(['posts'=>$posts]);
    }
    public function getPostByCat(Category $slug){
        $posts = $slug->posts()->where('is_published','1')->paginate(6);
        return view('client.index')->with(['posts'=>$posts]);
    }
    public function getPostByTag($tag){
        $posts = Post::join('tags','posts.id','=','tags.post_id')->where('name',$tag)->where('posts.is_published','1')->paginate(6);
        return view('client.index')->with(['posts'=>$posts]);
    }
    public function searchPost(Request $request){
        $search = strtolower($request->search);
        $posts = Post::where('title','LIKE',"%$search%")->where('is_published','1')->paginate(6);
        return view('client.index')->with(['posts'=>$posts]);
    }
}
