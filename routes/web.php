<?php

use App\Http\Controllers\DepositoController;
use Illuminate\Support\Facades\Route;

$EmpleadoController = 'App\Http\Controllers\EmpleadoController';
$AfiliadosController = 'App\Http\Controllers\AfiliadoController';
$RetiroController = 'App\Http\Controllers\RetiroController';
$DepositoController = 'App\Http\Controllers\DepositoController';

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RetiroController;

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
    return view('layouts.principal');
});

Route::resource('/empleados', $EmpleadoController);

Route::resource('/afiliados', $AfiliadosController);

Route::resource('/retiros', $RetiroController);

Route::get('/retiros/{id}/{id2}', [RetiroController::class, 'show']);

Route::get('/retiros/create/{codAfiliado}/{codEmpleado}', [RetiroController::class, 'create']);

Route::resource('/depositos', $DepositoController);

Route::get('/depositos/{id}/{id2}', [DepositoController::class, 'show']);

Route::get('/depositos/create/{codAfiliado}/{codEmpleado}', [DepositoController::class, 'create']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
