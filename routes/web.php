<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CtgController;
use App\Http\Controllers\MahsulotlarController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\phoneCotnroller;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PstController;
use App\Http\Controllers\TelefonController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lang/{type}', function($type){

    session(['locale' => $type]);
    return redirect()->back();

})->middleware('langunage');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('/phone', phoneCotnroller::class);
    Route::resource('/user', UserController::class);
    Route::resource('/tell', TelefonController::class);
    Route::resource('/new', NewController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/ctg', CtgController::class);
    Route::resource('/pst', PstController::class);
    Route::resource('/mahsulotlar', MahsulotlarController::class);
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
