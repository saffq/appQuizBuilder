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
Route::get('/', [\App\Http\Controllers\ExamsController::class, 'exams'])->name('welcome');
Route::get('/header', [\App\Http\Controllers\ExamsController::class, 'exams'])->name('welcome');
Route::get('/test-1', [\App\Http\Controllers\TestsController::class, 'tests'])->name('tests');
Route::get('post/{slug}', function($slug){
    $post = App\Models\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::post('/contact', ['as'=>'contact.store','uses'=>'\App\Http\Controllers\ContactController@contactPost']);

