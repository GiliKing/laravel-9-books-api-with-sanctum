<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CommentsController;


// Public routes
Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/books/latest', [BooksController::class, 'newest']); // latest books 

Route::get('/books/all', [BooksController::class, 'allbooks']); // all books

Route::get('/books/oldest', [BooksController::class, 'earliest']); // oldest books

Route::get('/comments/latest', [CommentsController::class, 'newest']); // latest comment

Route::get('/comments/all', [CommentsController::class, 'allcomments']); // all comment

Route::get('/comments/oldest', [CommentsController::class, 'earliest']); // oldest comment

// end of public route

// Protected route
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::resource('/books', BooksController::class);

    Route::resource('/comments', CommentsController::class);

    Route::post('/logout', [AuthController::class, 'logout']);
});