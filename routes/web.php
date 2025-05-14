<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TypesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/products/new', [ProductsController::class, 'store']);
Route::get('/products/new', [ProductsController::class, 'create']);
Route::get('/products', [ProductsController::class, 'index']);
//edição
Route::get('/products/update/{id}', [ProductsController::class, 'edit']);
Route::post('/products/update/', [ProductsController::class, 'update']);
//exclusão
Route::get('/products/delete/{id}', [ProductsController::class, 'destroy']);

Route::post('/types/new', [TypesController::class, 'store']);
Route::get('/types/new', [TypesController::class, 'create']);
Route::get('/types', [TypesController::class, 'index']);
//edição
Route::get('/types/update/{id}', [TypesController::class, 'edit']);
Route::post('/types/update/', [TypesController::class, 'update']);
//exclusão
Route::get('/types/delete/{id}', [TypesController::class, 'destroy']);