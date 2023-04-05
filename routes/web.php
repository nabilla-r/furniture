<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FurnitureController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [FurnitureController::class, 'welcome'])->name('welcome');
Route::get('/furnitures', [FurnitureController::class, 'index'])->name('furniture');

Route::get('/furnitures/data/create', [FurnitureController::class, 'create']);
Route::get('/furnitures/{id}', [FurnitureController::class, 'show']);
Route::post('/furnitures', [FurnitureController::class, 'store']);
Route::patch('/furnitures/{id}', [FurnitureController::class, 'update']);
Route::delete('/furnitures/{id}' ,[FurnitureController::class, 'destroy']);
Route::get('/furnitures/{id}/edit', [FurnitureController::class, 'edit']);



