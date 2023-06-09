<?php


use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Models\Movie;
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

Route::get('/', [HomeController::class, 'index']);

Route::resource('/movies', MovieController::class);

Route::resource('/reviews', MovieController::class);

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/create', [GenreController::class, 'create']);
Route::post('/genres', [GenreController::class, 'store']);
Route::get('/genres/{genre}/edit', [GenreController::class, 'edit']);
Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);
Route::put('/genres/{genre}', [GenreController::class, 'update']);

Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);
Route::put('/reviews/{review}', [ReviewController::class, 'update']);

Route::get('/users', function () {
    return view('users/index');
});


