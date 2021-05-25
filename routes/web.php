<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

Route::get('/login', [AuthController::class, 'formlogin']);
//Route::post('/login', [AuthController::class, 'login']);

Route::get('/', [MessageController::class, 'index']);
Route::post('/', [MessageController::class, 'store']);




Route::get('/admin/messages', [MessageController::class, 'messages_table']);
Route::get('/admin/messages/{message}/edit', [MessageController::class, 'messages_edit']);

Route::delete('/admin/messages/{message}', [MessageController::class, 'destroy']);
Route::put('/admin/messages/{message}', [MessageController::class, 'update']);


Route::Resource('user', UserController::class);

Route::get('export', [GoodController::class, 'export']);

Route::fallback([AuthController::class, 'fallback']);
