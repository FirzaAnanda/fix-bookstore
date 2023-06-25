<?php

use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\user\BookUserController;
use App\Http\Controllers\user\LoginUser;
use App\Http\Controllers\user\RegisterUser;
use App\Http\Controllers\user\TransactionUser;
use App\Http\Controllers\UserController;
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
  return view('landing-page');
});

Route::get('dashboard', function () {
  return view('dashboard');
})->name('dashboard');

Route::resource('users', UserController::class);

//admin
Route::get('admin', [BookController::class, 'dashboard'])->name('admin.dahsboard');
Route::get('admin/getAll', [BookController::class, 'getAll'])->name('admin.All');
Route::get('admin/create', [BookController::class, 'create']);
Route::post('admin/store', [BookController::class, 'store']);
Route::get('admin/{id}/edit', [BookController::class, 'edit']);
Route::patch('admin/{id}', [BookController::class, 'update']);
Route::delete('admin/{id}/delete', [BookController::class, 'destroy']);

//user
Route::controller(LoginUser::class)->group(function () {
  Route::get('user/login', 'index')->name('user.login');
  Route::post('user/process', 'process')->name('user.process');
  Route::get('user/logout', 'logout');
});

Route::controller(RegisterUser::class)->group(function () {
  Route::get('user/register', 'index');
  Route::post('user/create', 'create');
});

// Route::group(['middleware' => ['auth']], function(){
//     Route::group(['middleware' => ['AuthLogin:user']], function(){
//         Route::resource('user.index', BookUserController::class);
//     });

//     Route::group(['middleware' => ['AuthLogin:admin']], function(){
//         Route::resource('user.index', BookController::class);
//     });
// });



Route::get('user/index', [BookUserController::class, 'index'])->name('user.index');


//books
Route::get('book/{id}', [BookUserController::class, 'show']);

//transactions
