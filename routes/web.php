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

// Website Routes
Route::get('/', function () {
    return view('website.home-page');
})->name('home-page');

Route::get('/about', function () {
    return view('website.about-page');
})->name('about-page');

Route::get('/menu', function () {
    return view('website.menu-page');
})->name('menu-page');

Route::get('/review', function () {
    return view('website.review-page');
})->name('review-page');

Route::get('/contact', function () {
    return view('website.contact-page');
})->name('contact-page');

Route::get('/booktable', function () {
    return view('website.booktable-page');
})->name('booktable-page');

// // Admin & Delivery Dashboards
// Route::get('/admin-dashboard', function () {
//     return view('admin-dashboard');
// })->name('admin.dashboard');

// Route::get('/delivery-dashboard', function () {
//     return view('delivery-dashboard');
// })->name('delivery.dashboard');

// // Front Desk Routes
//  Route::get('/dashboard', function () {
//  return view('frontdesk.dashboard');
//    })->name('dashboard');

//     Route::get('/manage-orders', function () {
//         return view('frontdesk.manageorders');
//     })->name('manage-orders');

//     Route::get('/manage-bookings', function () {
//         return view('frontdesk.managebookings');
//     })->name('manage-bookings');

//     Route::get('/reviews', function () {
//         return view('frontdesk.reviews');
//     })->name('reviews');

//     Route::get('/signout', function () {
//         return view('frontdesk.signout');
//     })->name('signout');

//     Route::get('/assign-delivery', function () {
//         return view('frontdesk.assigndelivery');
//     })->name('assign-delivery');

//     Route::get('/test', function () {
//         return view('frontdesk.test');
//     })->name('test');
Route::get('/assigndelivery', function () {
    return view('frontdesk.assigndelivery');
})->name('assigndelivery');
Route::get('/sidebar', function () {
    return view('frontdesk.sidebar');
})->name('sidebar');

Route::get('/frontdesk', function () {
    return view('frontdesk.frontdesk-dashboard');
})->name('frontdesk-dashboard');

Route::get('/dashboard', function () {
    return view('frontdesk.dashboard');
})->name('dashboard');

Route::get('/assigndelivery', function () {
    return view('frontdesk.assigndelivery');
})->name('assigndelivery');

Route::get('/managebookings', function () {
    return view('frontdesk.managebookings');
})->name('managebookings');

Route::get('/manageorders', function () {
    return view('frontdesk.manageorders');
})->name('manageorders');

Route::get('/signout', function () {
    return view('frontdesk.signout');
})->name('signout');

Route::get('/reviews', function () {
    return view('frontdesk.reviews');
})->name('reviews');



