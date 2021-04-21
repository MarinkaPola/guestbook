<?php


use App\Http\Controllers\GoodController;
use Illuminate\Support\Facades\Route;

Route::post('import', [GoodController::class, 'import']);
