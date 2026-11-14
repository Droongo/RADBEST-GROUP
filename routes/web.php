<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/coffee', 'coffee')->name('coffee');
    Route::get('/manufacturing', 'manufacturing')->name('manufacturing');
    Route::get('/trading', 'trading')->name('trading');
    Route::get('/gallery', 'gallery')->name('gallery');
});

Route::get('/contact', [ContactController::class, 'show'])->name('contact');

/*
|--------------------------------------------------------------------------
| Form endpoints (CSRF-protected by the "web" middleware group)
|--------------------------------------------------------------------------
*/
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

Route::post('/newsletter', [NewsletterController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('newsletter.store');

/*
|--------------------------------------------------------------------------
| Legacy URLs from the static HTML site — 301 to the new clean URLs so
| bookmarks, search results and external links keep working.
|--------------------------------------------------------------------------
*/
Route::permanentRedirect('/rad.html', '/');
foreach (['about', 'coffee', 'manufacturing', 'trading', 'gallery', 'contact'] as $page) {
    Route::permanentRedirect("/{$page}.html", "/{$page}");
}
