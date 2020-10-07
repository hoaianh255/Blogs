<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::where('is_published','1')->get();
        return view('client.contact')->with('categories',$categories);
    }
}
