  <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appcontroller;

Route::get('/', [AppController::class, 'welcome'])->name('welcome');

Route::get('/blog', [appcontroller::class, 'blog'])->name('pages.blog');
Route::get('/blogDetails/{blog}', [appcontroller::class, 'blogDetails'])->name('pages.blogDetails');
Route::get('/create', [appcontroller::class, 'create'])->name('pages.create');
Route::get('/contact', [AppController::class, 'showContactPage'])->name('pages.contact');
Route::get('/signup', [AppController::class, 'showSignupForm'])->name('pages.signup');
Route::get('/about', [AppController::class, 'showAboutPage'])->name('pages.about');
Route::post('/blog', [AppController::class, 'store'])->name('pages.store');
Route::delete('/blogDetails/{blog}', [appcontroller::class, 'destroy'])->name('pages.destroy');


