<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailPostController extends Controller
{
    public function index(Post $slug){
        $categories = Category::where('is_published','1')->get();
        //update view
        $view_up = $slug->view + 1;
        $slug->update(['view'=>$view_up]);
        return view('client.single')->with(['post'=>$slug,'categories'=>$categories]);
    }
}
