<?php
use App\Http\Controllers\Yonetim;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Veritabaniislemleri;
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
Route::get("/web",[Yonetim::class,'site']);
Route::get("/ekle",[\App\Http\Controllers\Veritabaniislemleri::class,'ekle']);
