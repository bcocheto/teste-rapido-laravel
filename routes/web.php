<?php

use App\Http\Controllers\InverterStringController;
use App\Http\Controllers\ArrayController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\DivisaoController;
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
    return view('welcome', ['name' => 'Samantha']);
});

Route::get('/string', [InverterStringController::class, 'index']);

Route::get('/array', [ArrayController::class, 'index']);

Route::get('/calculadora', [CalculadoraController::class, 'index']);

Route::get('/arquivo', [ArquivoController::class, 'index']);

Route::get('/divisao/{numero1}/{numero2}', [DivisaoController::class, 'index']);


