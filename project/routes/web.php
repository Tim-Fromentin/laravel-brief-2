<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('movie.index');
});

Route::resource('movie', MovieController::class);
Route::get('/movies/asc', [MovieController::class, 'indexAsc'])->name('movie.indexAsc');
Route::get('/movies/rating', [MovieController::class, 'indexRating'])->name('movie.indexRating');
Route::get('/movies/ratingAsc', [MovieController::class, 'indexRatingAsc'])->name('movie.indexRatingAsc');
Route::get('/movies/ratingDesc', [MovieController::class, 'indexRatingDesc'])->name('movie.indexRatingDesc');

