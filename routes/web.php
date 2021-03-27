<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\controllers\ActionController;


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


Route::get('/', [NavController::class, 'home']);
Route::get('/list', [NavController::class, 'list']);
Route::get('/personnage/{id}', [NavController::class, 'personnage']);
Route::get('/ajout', [NavController::class, 'ajout']);
Route::post('/ajout', [ActionController::class, 'ajout']);
Route::post('/suppPersonnage', [ActionController::class, 'suppPersonnage']);
Route::get('/majPersonnage/{id}', [NavController::class, 'majPersonnage']);
Route::post('/majPersonnage', [ActionController::class, 'majPersonnage']);