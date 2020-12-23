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

Route::get('/','App\Http\Controllers\frontendController@home' );
Route::get('single-post','App\Http\Controllers\frontendController@single_post' ) ->name('single.post');
Route::get('contact','App\Http\Controllers\frontendController@contact' ) ->name('contact');
Route::get('video','App\Http\Controllers\frontendController@video' ) ->name('video');





Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//category routes
Route::resource('post-category','App\Http\Controllers\postCategory');
Route::get('post-category-edit/{id}','App\Http\Controllers\postCategory@edit');
Route::post('post-category-update','App\Http\Controllers\postCategory@update') -> name('category.update');
Route::get('post-category-unpublished/{id}','App\Http\Controllers\postCategory@catUnpublished') ->name('category.unpublish');
Route::get('post-category-published/{id}','App\Http\Controllers\postCategory@catPublished') ->name('category.publish');

// tag routes
Route::resource('post-tag','App\Http\Controllers\tagController');
Route::get('tag-category-unpublished/{id}','App\Http\Controllers\tagController@tagUnpublished') ->name('tag.unpublish');
Route::get('tag-category-published/{id}','App\Http\Controllers\tagController@tagPublished') ->name('tag.publish');

//post routes
Route::resource('post','App\Http\Controllers\postController');
Route::get('post-edit/{id}','App\Http\Controllers\postController@edit');
