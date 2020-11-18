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
    return view('frontend.index');
});
Route::get('contact', function () {
    return view('frontend.contact');
});

Route::get('video', function () {
    return view('frontend.video');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('post-category','App\Http\Controllers\postCategory');
Route::get('post-category-edit/{id}','App\Http\Controllers\postCategory@edit');
Route::post('post-category-update','App\Http\Controllers\postCategory@update') -> name('category.update');
Route::get('post-category-unpublished/{id}','App\Http\Controllers\postCategory@catUnpublished') ->name('category.unpublish');
Route::get('post-category-published/{id}','App\Http\Controllers\postCategory@catPublished') ->name('category.publish');
