<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;

Route::post('/books/{book}/reviews', [ReviewController::class, 'store'])
    ->name('reviews.store');

Route::get('/', function () {
    return redirect('/books');
});
Route::resource('books', BookController::class)->only(['index', 'show']);

Route::get('/book', function () {
    return view('book'); 
});
