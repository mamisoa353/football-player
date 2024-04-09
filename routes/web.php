<?php

use App\Http\Controllers\ClubTeamController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\LigueController;
use App\Http\Controllers\NationaliteController;
use App\Http\Controllers\NationalTeamController;
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
Route::get('/home', function () {
    return view('home');
});
Route::get('/club', function () {
    return view('clubTeam.list');
});
Route::get('/player', function () {
    return view('player.detail');
});
Route::auto('/nationalite', NationaliteController::class);
Route::auto('/ligue', LigueController::class);
Route::auto('/joueur', JoueurController::class);
Route::auto('/clubteam', ClubTeamController::class);
Route::auto('/nationalteam', NationalTeamController::class);
