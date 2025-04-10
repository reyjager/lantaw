<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Models\Role;

Route::get('/', [AuthController::class, 'islogUser']);

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showlogin')->name('login');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'showregister')->name('register');
    Route::post('/register', 'register')->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/document1', 'assignRole')->name('assignRole');
    Route::get('/document2', 'doc2')->name('doc2');
    Route::get('/document3', 'doc3')->name('doc3');
});
Route::put('/update', [RoleController::class, 'update'])->name('update');



Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile');
});

// Route::controller(PostController::class)->group(function () {
//     Route::get('/post', 'index')->name('post');
//     Route::get('/post/create', 'create')->name('post.create');
//     Route::post('/post/store', 'store')->name('post.store');
//     Route::post('/post/comment', 'comment')->name('post.comment');
//     Route::post('/post/commentpost', 'comment')->name('post.commentpost');PostController::class
//     Route::get('post/{post}/show', 'show');
// });
Route::resource('post', PostController::class)->names('post');

Route::post('/post/comment', [PostController::class, 'comment'])->name('post.comment');
Route::post('/post/commentpost', [PostController::class, 'commentpost'])->name('post.commentpost');
Route::get('/post/{id}', [PostController::class, 'showpost']);
