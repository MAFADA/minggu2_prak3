<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
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

Route::get('/', [HomeController::class,'home']);

Route::prefix('prodi')->group(function() {
    Route::get('/manajemen-informatika',[HomeController::class,'mi']);
    Route::get('/teknik-informatika',[HomeController::class,'ti']);
});

Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function() {
    Route::get('/perkantoran',[HomeController::class,'kantor']);
    Route::get('/laboratorium',[HomeController::class,'lab']);
    Route::get('/kelas',[HomeController::class,'kelas']);
    Route::get('/lainnya',[HomeController::class,'lain']);
});

Route::get('/about', [AboutController::class,'about']);

Route::get('/comment/{name}/{pesan}', [CommentController::class,'comment']);
