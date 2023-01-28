<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoritesController;

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


Route::get('/formuls/all',[PageController::class,'all'])->name('page.all');
Route::get('/',[PageController::class,'index'])->name('page.index');
Route::get('/formuls/favorites',[PageController::class,'favorites'])->name('page.favorites');
Route::get('/formuls/registration',[PageController::class,'reg'])->name('page.reg');
Route::get('/formuls/authorization',[PageController::class,'auth'])->name('page.auth');
Route::get('/formuls/{id}',[PageController::class,'show'])->name('page.show');
Route::get("/users/logout",[UserController::class,'logout'])->name('page.logout');
Route::get("/users/insert",[PageController::class,'insert'])->name('page.insert');


Route::post("/users/authorization",[UserController::class,'login'])->name('page.log');
Route::post('/users/registration',[UserController::class,'regist'])->name('page.regist');
Route::post('/formuls/favorites-add',[FavoritesController::class,'store'])->name('page.favorites.add');

