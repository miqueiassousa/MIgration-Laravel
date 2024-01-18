<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index']);

Route::get('/sair', [SiteController::class, 'sair']);

Route::get('/usuarios/{qnt}', [SiteController::class, 'usuarios']);

Route::get('/photo2', [PhotoController::class, 'photo2']);

Route::get('/photo', [PhotoController::class, 'photo']);

Route::get('/include1', [SiteController::class, 'include1']);
Route::get('/include2', [SiteController::class, 'include2']);
Route::get('/include3', [SiteController::class, 'include3']);

Route::get('/componente', [SiteController::class, 'componente']);

Route::get("/layout", [SiteController::class, 'layout']);
Route::get("/layout2", [SiteController::class, 'layout2']);






// Route::get('/', function () {
//     return view('bemvindo');
// });
