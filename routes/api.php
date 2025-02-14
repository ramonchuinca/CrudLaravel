<?php


use App\Http\Controllers\Api\CarroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MarcaController;
use App\Models\Marca;

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

Route::get('/carros', [CarroController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('marcas', MarcaController::class);

Route::prefix('carro')->group(function () { # http://localhost:8000/api/cars
    Route::get('/', [CarroController::class, 'index']); // Listar todos os carros
    Route::post('/', [CarroController::class, 'store']); // Criar um novo carro
    Route::get('{id}', [CarroController::class, 'show']); // Exibir detalhes de um carro
    Route::put('{id}', [CarroController::class, 'update']); // Atualizar um carro
    Route::delete('{id}', [CarroController::class, 'destroy']); // Excluir um carro
});



