<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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



Route::get('/', [MovieController::class,'Index']);

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/show={id}', [MovieController::class,'show']);


Route::get('/HotMovies', [MovieController::class,'IndexHot']);
Route::get('/UpComing', [MovieController::class,'IndexUpComing']);
Route::get('/toprated', [MovieController::class,'IndexTopRated']);
Route::get('/genre ', function () {
    return view('pages.genre');
});