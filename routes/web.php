<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/sign_in.html', function () {
    return view('sign_in');
});

<<<<<<< HEAD

Route::get('/sign_in.html', function () {
    return view('sign_in');
});

=======
>>>>>>> 5c43018 (font end)
Route::get('/index.html', function () {
    return view('index');
});

<<<<<<< HEAD
Route::get('/index', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
=======

Route::get('/movies.html', function () {
    return view('movies');
});

Route::get('/Contact_Us.html', function () {
    return view('Contact_Us');
});


Route::get('/about.html', function () {
    return view('about');
});

Route::get('/ticket-booking.html', function () {
    return view('ticket-booking');
});

Route::get('/seat_sel.html', function () {
    return view('seat_sel');
});

Route::get('/e-ticket.html', function () {
    return view('e-ticket');
});

Route::get('/e-ticket.html', function () {
    return view('admin/alerts/');
});

>>>>>>> 5c43018 (font end)

