<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaillerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'] )->name('home');
Route::get("/contact",[ContactController::class,'index'])->name('contact');
Route::post("/sendmail",[MaillerController::class,'sendMail'])->name('sendmail');
Route::get('/search',[HomeController::class,'searchPost'])->name('searchPost');
Route::get('/category/{slug}',[HomeController::class,'getPostByCat'])->name('category');
Route::get('post/{slug}',[DetailPostController::class,'index'])->name('showDetail');
Route::get('tag/{tag}',[HomeController::class,'getPostByTag'])->name('post.tag');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::fallback(function (){
    return response('Page Not Found',404)->header('Content-Type','text-plain');
});
