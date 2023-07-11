<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('dashboard', function () {
//   return view('dashboard');
// })->name('dashboard');

// landing page
Route::get('/', function () {
  return view('landing-page');
});

Route::get('booksAll', [BookController::class, 'getBooks'])->name('all.books');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('register', [RegisteredUserController::class, 'store']);

Route::middleware('auth')->group(function () {
  Route::resource('users', UserController::class);

  Route::resource('books', BookController::class);

  Route::resource('transactions', TransactionController::class);

  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//admin
// Route::get('admin', [BookController::class, 'dashboard'])->name('admin.dahsboard');
// Route::get('admin/getAll', [BookController::class, 'getAll'])->name('admin.All');
// Route::get('admin/create', [BookController::class, 'create']);
// Route::post('admin/store', [BookController::class, 'store']);
// Route::get('admin/{id}/edit', [BookController::class, 'edit']);
// Route::patch('admin/{id}', [BookController::class, 'update']);
// Route::delete('admin/{id}/delete', [BookController::class, 'destroy']);

//user
// Route::controller(LoginUser::class)->group(function () {
//   Route::get('user/login', 'index')->name('user.login');
//   Route::post('user/process', 'process')->name('user.process');
//   Route::get('user/logout', 'logout');
// });

// Route::controller(RegisterUser::class)->group(function () {
//   Route::get('user/register', 'index');
//   Route::post('user/create', 'create');
// });

// Route::group(['middleware' => ['auth']], function(){
//     Route::group(['middleware' => ['AuthLogin:user']], function(){
//         Route::resource('user.index', BookUserController::class);
//     });

//     Route::group(['middleware' => ['AuthLogin:admin']], function(){
//         Route::resource('user.index', BookController::class);
//     });
// });



// Route::get('user/index', [BookUserController::class, 'index'])->name('user.index');


//books
// Route::get('book/{id}', [BookUserController::class, 'show']);

//transactions

require __DIR__ . '/auth.php';
