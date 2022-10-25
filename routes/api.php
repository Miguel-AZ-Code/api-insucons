<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServicioController;
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
//---------------------------------------------------------------------------------

//Public routes
Route::get('/medidas', [MedidaController::class, 'index']);
Route::get('/marcas', [MarcaController::class, 'index']);
Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/servicios', [ServicioController::class, 'index']);
//Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//---------------------------------------------------------------------------------

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    //Roles route
    Route::get('/roles', [RoleController::class, 'index']);
    Route::post('/roles', [RoleController::class, 'store']);
    Route::put('/roles/{id}', [RoleController::class, 'update']);
    Route::delete('/roles/{id}', [RoleController::class, 'destroy']);
    //Medidas route
    Route::post('/medidas', [MedidaController::class, 'store']);
    Route::put('/medidas/{id}', [MedidaController::class, 'update']);
    Route::delete('/medidas/{id}', [MedidaController::class, 'destroy']);
    //Marcas route
    Route::post('/marcas', [MarcaController::class, 'store']);
    Route::put('/marcas/{id}', [MarcaController::class, 'update']);
    Route::delete('/marcas/{id}', [MarcaController::class, 'destroy']);
    //Proveedores route
    Route::post('/proveedores', [ProveedorController::class, 'store']);
    Route::put('/proveedores/{id}', [ProveedorController::class, 'update']);
    Route::delete('/proveedores/{id}', [ProveedorController::class, 'destroy']);
    //Servicios route
    Route::post('/servicios', [ServicioController::class, 'store']);
    Route::put('/servicios/{id}', [ServicioController::class, 'update']);
    Route::delete('/servicios/{id}', [ServicioController::class, 'destroy']);
});
//----------------------------------------------------------------------------------
