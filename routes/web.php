<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostReviewsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Yaml\Yaml;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     return view('posts',[
      'posts' => Post::latest()->with('category','author')->get()
  ]);
});




Route::get('posts/{post:slug}', function (Post $post) {
       return view('post', [
        'post' => $post
    ]);                      

});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);

  });


  Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);

  });


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');

Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');



Route::get('admin/posts/create',[PostController::class,'create'])->middleware('admin');
Route::post('admin/posts',[PostController::class,'store'])->middleware('admin');

Route::get('admin/posts',[AdminPostController::class,'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit',[AdminPostController::class,'edit'])->middleware('admin');
Route::patch('admin/posts/{post}',[AdminPostController::class,'update'])->middleware('admin');
Route::delete('admin/posts/{post}',[AdminPostController::class,'destroy'])->middleware('admin');

Route::get('admin/posts/{post}/edit',[PostController::class,'edit']);

Route::post('posts/{post:slug}/reviews',[PostReviewsController::class,'store']);