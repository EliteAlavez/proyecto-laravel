<?php

use App\Http\Controllers\CasillaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\EleccionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraphicsController;


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
Route::get('/graphics', [GraphicsController::class, 'index']);

//Generador de PDF
Route::get('/casilla/pdf', [CasillaController::class,'generatepdf']);
Route::get('/candidato/pdf', [CandidatoController::class,'generatepdf']);
Route::get('/voto/pdf', [VotoController::class,'generatepdf']);
Route::get('/eleccion/pdf', [EleccionController::class,'generatepdf']);

//Login con Facebook
Route::get('/login', [LoginController::class,'index']);
Route::get('/login/facebook/', [LoginController::class,"redirectToFacebookProvider"]);
Route::get('/login/facebook/callback', [LoginController::class,"handleProviderFacebookCallback"]);

//Clases 
Route::resource('casilla', CasillaController::class);
Route::resource('candidato', CandidatoController::class);
Route::resource('voto', VotoController::class);
Route::resource('eleccion', EleccionController::class);

//Graphics

