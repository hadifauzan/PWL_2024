<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController; 

Route::resource('photos', PhotoController::class);
Route :: resource('photos', PhotoController :: class) ->only (['index', 'show']);
    
    Route:: resource('photos', PhotoController :: class) ->except ([
    'create', 'store', 'update', 'destroy']);

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

// Route::get ('/hello', function () {
//     return 'Hello World';    
//     });

Route::get('/world', function (){
    return (' World');
});


Route::get('/', function (){
    return ('Selamat datang');
});


Route::get('/about', function (){
    return ('NIM : 2241760039 & Nama : Muhammad Khasbul Hadi Fauzan');
});

Route::get ('/user/{name} ', function ($name){
    return 'Nama saya '. $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'. $postId." Komentar ke -: ".$commentId;
});


Route::get('/articles/{id}', function ($id){
    return ('Halaman Artikel dengan ID '.$id);
});

Route::get ('/user/{name?}', function ($name='john') {
    return 'Nama saya '. $name;
});

Route :: get('/', [HomeController :: class,'index']) ;
Route :: get('/about', [AboutController :: class,'about']) ;
Route :: get('/articles/{id}', [ArticleController :: class,'articles']) ;