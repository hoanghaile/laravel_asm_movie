<?php

use App\Http\Controllers\ActorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\DirController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuimailController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/chitiet/{id}', [HomeController::class, 'detail']);
Route::get('/theloai/{id}', [HomeController::class, 'theloai']);
Route::post('/lienhe', [GuimailController::class, 'guimaillienhe'])->name('lienhe');
Route::get('/baocao', [HomeController::class, 'baocao']);
Route::get('phim/{slug}', [HomeController::class, 'slug']);
// admin



Route::get('admin', function () {
    return view('admin.page.index');
});

Route::group(['prefix' => 'admin'], function () {
    // Quản lý phim
    Route::resource('film', FilmController::class);

    // Quản lý thể loại
    Route::resource('genres', GenresController::class);

    // Quản lý thông tin đạo diễn
    Route::resource('director', DirController::class);

    // Quản lý thông tin diễn viên
    Route::resource('actor', ActorController::class);
});
