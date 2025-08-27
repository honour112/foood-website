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
Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
})->name('/admin-dashboard');
Route::get('/admindashboard', function () {
    return view('admindashboard');
})->name('admindashboard');
Route::get('/dash', function () {
    return view('dash');
})->name('/dash');

Route::get('/analytics', function () {
    return view('admin-view.analytics');
})->name('analytics');

Route::get('/report', function () {
    return view('admin-view.report');
})->name('/report');
Route::get('/update', function () {
    return view('admin-view.update');
})->name('update');
Route::get('/usermanagement', function () {
    return view('admin-view.usermanagement');
})->name('usermanagement');





