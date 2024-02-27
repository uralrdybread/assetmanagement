<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});

Route::get('/asset', [AssetController::class, 'index'])->name('asset.index');
Route::get('/asset/create', [AssetController::class, 'create'])->name('asset.create');
Route::post('/asset', [AssetController::class, 'store'])->name('asset.store');
Route::get('/asset/{asset}/edit', [AssetController::class, 'edit'])->name('asset.edit');
Route::put('/asset/{asset}/update', [AssetController::class, 'update'])->name('asset.update');
Route::delete('/asset/{asset}/delete', [AssetController::class, 'delete'])->name('asset.delete');


Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::delete('/employee/{employee}/delete', [EmployeeController::class, 'delete'])->name('employee.delete');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');