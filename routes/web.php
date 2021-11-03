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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', function (){
    return view('contact');
});
Route::get('/', function () {
    $posts = App\Models\Post::all();
    return view('home', compact('posts'));
});
Route::get('post/{slug}', function($slug){
    $post = App\Models\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});
Route::get('/quiz', function () {
 return view('quiz');
});
Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);
