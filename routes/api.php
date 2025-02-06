<?php

use App\Http\Controllers\api\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/cars', [CarController::class, 'store']);

Route::prefix('cars')->group(function () { # http://localhost:8000/api/cars
    Route::get('v2', [CarController::class, 'index']); // Listar todos os carros
    Route::post('v1', [CarController::class, 'store']); // Criar um novo carro
    Route::get('{id}', [CarController::class, 'show']); // Exibir detalhes de um carro
    Route::put('{id}', [CarController::class, 'update']); // Atualizar um carro
    Route::delete('{id}', [CarController::class, 'destroy']); // Excluir um carro
});


Route::get('/marca/{id}/cars', [CarController::class, 'listarCarrosPorMarca']);
