<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::prefix('/clients')->group(function () {
    Route::get('/', [ClientsController::class,'index']); // listagem de Clients
    Route::get('/create', [ClientsController::class,'create']); // formulário de criação de Clients
    Route::post('/store', [ClientsController::class,'createAction']); // criação de Clientss
    Route::get('/{id}/edit', [ClientsController::class,'update']); // formulário de edição de Clients
    Route::put('/{id}/update', [ClientsController::class,'updateAction']); // edição de Clients
    Route::delete('/{id}/destroy',[ClientsController::class,'destroy']); // exclusão de lients
});
Route::prefix('/employees')->group(function () {
    Route::get('/', [EmployeesController::class,'index']); // listagem de Employees
    Route::get('/create', [EmployeesController::class,'create']); // formulário de criação de Employees
    Route::post('/store', [EmployeesController::class,'store']); // criação de Employeess
    Route::get('/{id}/edit', [EmployeesController::class,'edit']); // formulário de edição de Employees
    Route::put('/{id}/update', [EmployeesController::class,'update']); // edição de Employees
    Route::delete('/{id}/destroy',[EmployeesController::class,'destroy']); // exclusão de lients
});
Route::prefix('/products')->group(function () {
    Route::get('/', [ProductsController::class,'index']); // listagem de Products
    Route::get('/create', [ProductsController::class,'create']); // formulário de criação de Products
    Route::post('/store', [ProductsController::class,'store']); // criação de Productss
    Route::get('/{id}/edit', [ProductsController::class,'edit']); // formulário de edição de Products
    Route::put('/{id}/update', [ProductsController::class,'update']); // edição de Products
    Route::delete('/{id}/destroy',[ProductsController::class,'destroy']); // exclusão de lients
});
Route::prefix('/ramals')->group(function () {
    Route::get('/', [RamalsController::class,'index']); // listagem de Ramals
    Route::get('/create', [RamalsController::class,'create']); // formulário de criação de Ramals
    Route::post('/store', [RamalsController::class,'store']); // criação de Ramalss
    Route::get('/{id}/edit', [RamalsController::class,'edit']); // formulário de edição de Ramals
    Route::put('/{id}/update', [RamalsController::class,'update']); // edição de Ramals
    Route::delete('/{id}/destroy',[RamalsController::class,'destroy']); // exclusão de lients
});

