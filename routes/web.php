<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/class', function () {
    return view('class');
});

// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/blog','App/HTTP/Controllers/blogController@blogList'); 

Route::get('/blog', 'App\Http\Controllers\blogController@blogList')->name('blogList');

Route::get('/single', function () {
    return view('single');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('singleBlog/{id}', 'App\Http\Controllers\blogController@blogsingle')->name('singleBlog');
