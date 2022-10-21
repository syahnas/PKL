<?php

use App\Http\Controllers\DatamhsftController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PmandiriController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TbdataController;
use App\Http\Controllers\ValidasiController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/panduan', function () {
    return view('dashboard.panduan');
});
Route::get('/info', function () {
    return view('dashboard.info');
});
Route::group(['middleware'=>['auth']],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/status',[StatusController::class,'index']);
});
Route::group(['middleware'=>['auth','ceklevel:admin']],function(){
    Route::get('/datamhs',[DatamhsftController::class,'index']);
    Route::get('/validasi',[ValidasiController::class,'index']);
    Route::get('/validasi/{id}/setuju',[ValidasiController::class,'setuju']);
    Route::get('/pmandiri/{id}/setuju',[PmandiriController::class,'setuju']);
    Route::get('/pmandiri/{id}/tolak',[PmandiriController::class,'tolak']);
    Route::get('/validasi/{id}/tolak',[ValidasiController::class,'tolak']);
    Route::get('/pmandiri',[PmandiriController::class,'index']);
    Route::get('/pmandiri/{id}/edit',[PmandiriController::class,'edit']);
    Route::put('/pmandiri/{id}',[PmandiriController::class,'update']);
    Route::delete('/pmandiri/{id}',[PmandiriController::class,'destroy']);
    Route::get('/validasi/{id}/show',[ValidasiController::class,'show']);
    Route::get('/validasi/rekap',[ValidasiController::class,'rekap']);
    Route::get('/validasi/rekap',[ValidasiController::class,'rekap']);
    Route::get('/validasi/cetak',[ValidasiController::class,'cetak']);
});
Route::group(['middleware'=>['auth','ceklevel:user']],function(){
    Route::get('/formulir', function () {
        return view('formulir.formulir');
    });  
    Route::get('/pmandiri/create',[PmandiriController::class,'create']);
    Route::post('/pmandiri/store',[PmandiriController::class,'store']);
});


Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');