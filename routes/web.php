<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RamalsController;
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
    Route::post('/createAction', [ClientsController::class,'createAction']); // criação de Clientss
    Route::post('/updateAction', [ClientsController::class,'updateAction']); // formulário de edição de Clients
    Route::get('/update/{id}', [ClientsController::class,'update']); // edição de Clients
    Route::get('/destroy/{id}',[ClientsController::class,'destroy']); // exclusão de lients
});
Route::prefix('/employees')->group(function () {
    Route::get('/', [EmployeesController::class,'index']); // listagem de Employees
    Route::get('/create', [EmployeesController::class,'create']); // formulário de criação de Employees
    Route::post('/createAction', [EmployeesController::class,'createAction']); // criação de Employeess
    Route::post('/updateAction', [EmployeesController::class,'updateAction']); // formulário de edição de Employees
    Route::get('/update/{id}', [EmployeesController::class,'update']); // edição de Employees
    Route::get('/destroy/{id}',[EmployeesController::class,'destroy']); // exclusão de lients
});
Route::prefix('/products')->group(function () {
    Route::get('/', [ProductsController::class,'index']); // listagem de Products
    Route::get('/create', [ProductsController::class,'create']); // formulário de criação de Products
    Route::post('/createAction', [ProductsController::class,'createAction']); // criação de Productss
    Route::post('/updateAction', [ProductsController::class,'updateAction']); // formulário de edição de Products
    Route::get('/update/{id}', [ProductsController::class,'update']); // edição de Products
    Route::get('/destroy/{id}',[ProductsController::class,'destroy']); // exclusão de lients
});
Route::prefix('/ramals')->group(function () {
    Route::get('/', [RamalsController::class,'index']); // listagem de Ramals
    Route::get('/create', [RamalsController::class,'create']); // formulário de criação de Ramals
    Route::post('/createAction', [RamalsController::class,'createAction']); // criação de Ramalss
    Route::post('/updateAction', [RamalsController::class,'updateAction']); // formulário de edição de Ramals
    Route::get('/update/{id}', [RamalsController::class,'update']); // edição de Ramals
    Route::get('/destroy/{id}',[RamalsController::class,'destroy']); // exclusão de lients
});

