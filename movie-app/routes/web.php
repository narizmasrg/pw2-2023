<?php


use App\Http\Controllers\GenreController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/movies', [MovieController ::class, 'index']);

Route::get('/genres', [GenreController ::class, 'index']);

Route::get('/reviews', [ReviewController ::class, 'index']);

Route::get('/users', function () {
    return view('users/index');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

