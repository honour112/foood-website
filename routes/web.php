<?php

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
Route::get('/test-links', function () {
    return view('test-links');
});

Route::get('/', function () {
    return view('home-page');
})->name('home-page');

Route::get('/about', function () {
   return view('about-page');
})->name('about-page');

Route::get('/menu', function () {
    return view('menu-page');
})->name('menu-page');

Route::get('/review', function () {
    return view('review-page');
})->name('review-page');

Route::get('/contact', function () {
    return view('contact-page');
})->name('contact-page');

Route::get('/book-table', function () {
    return view('booktable-page');
})->name('booktable-page');

Route::get('/admindashboard', function () {
    return view('admin-dashboard');
})->name('/admin-dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/test-links', function () {
    return view('test-links');
});

// Route::get('/delivery-dashboard', function () {
//    return view('delivery-dashboard');
// })->name('delivery-dashboard');


Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/deli-details', function () {
    return view('deli-details');
})->name('deli-details');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

Route::get('/deli-help', function () {
    return view('deli-help');
})->name('deli-help');

Route::get('/deli-web', function () {
    return view('deli-web');
})->name('deli-web');

Route::get('/deli-logout', function () {
    return view('deli-logout');
})->name('deli-logout');

Route::get('/deli-map', function () {
    return view('deli-map');
})->name('deli-map');

Route::get('/deli-report', function () {
    return view('deli-report');
})->name('deli-report');

Route::get('/deli-dark', function () {
    return view('deli-dark');
})->name('deli-dark');