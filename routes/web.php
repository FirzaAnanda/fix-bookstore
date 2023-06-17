<?php

use App\Http\Controllers\admin\BookController;
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

// landing page
Route::get('/', function () {
    echo "Landing page";
});

//admin
Route::get('admin', [BookController::class, 'dashboard'])->name('admin.dahsboard');
Route::get('admin/getAll', [BookController::class, 'getAll'])->name('admin.All');
Route::get('admin/create', [BookController::class, 'create']);
Route::post('admin/store', [BookController::class, 'store']);
Route::get('admin/{id}/edit', [BookController::class, 'edit']);
Route::patch('admin/{id}', [BookController::class, 'update']);
Route::delete('admin/{id}/delete', [BookController::class, 'destroy']);

//user
Route::get('user', [BookController::class, 'dashboard']);