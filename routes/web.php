<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', function () {
    return view('emails');
});

Auth::routes();
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/liste-produit', [App\Http\Controllers\HomeController::class, 'listProduit']);
Route::get('/commande-produit-{id}', [App\Http\Controllers\HomeController::class, 'commandeProduit'])->where(['id' => '(\d+)']);
Route::POST('/Search-product', [ProduitController::class, 'RechercheProduit']);



