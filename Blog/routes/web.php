<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
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
//Home
Route::get('/',[HomeController::class,'index'] );
Route::get('/detail/{slug}/{id}',[HomeController::class,'detail'] );
Route::get('/category/{slug}/{id}',[HomeController::class,'category_posts'] );
Route::get('/all-category',[HomeController::class,'all_category'] );
Route::post('/save-comment/{slug}/{id}',[HomeController::class,'save_comment'] );
Route::get('save-post-form',[HomeController::class,'submit_post'] );
Route::post('save-post-form',[HomeController::class,'save_post'] );
//Admin
Route::get('/admin/login',[AdminController::class,'login']);
Route::get('/admin/logout',[AdminController::class,'logout']);
Route::post('/admin/login',[AdminController::class,'submit_login']);  
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
//Category
Route::resource('/admin/category',CategoryController::class);
Route::get('/admin/category/{id}/delete',[CategoryController::class,'destroy']);
//posts
Route::resource('/admin/post',PostController::class);
Route::get('/admin/post/{id}/delete',[PostController::class,'destroy']);
//Setting
Route::get('/admin/setting',[SettingController::class,'index']);
Route::post('/admin/setting',[SettingController::class,'change']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
