<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appcontroller;

Route::get('/', [AppController::class, 'welcome'])->name('welcome');

Route::get('/blog', [appcontroller::class, 'blog'])->name('pages.blog');
Route::get('/blogDetails/{id}', [appcontroller::class, 'blogDetails'])->name('pages.blogDetails');
Route::get('/comment', [appcontroller::class, 'comment'])->name('pages.comment');
Route::get('/contact', [AppController::class, 'showContactPage'])->name('pages.contact');
Route::get('/signup', [AppController::class, 'showSignupForm'])->name('pages.signup');
Route::get('/about', [AppController::class, 'showAboutPage'])->name('pages.about');
// Route::get('/categories', [AppController::class, 'showCategoriesPage'])->name('pages.categories');





