<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;

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
