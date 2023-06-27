<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/register.html', function () {
    return view('register');
});

Route::get('/index.html', function () {
    return view('index');
});


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

// Route::get('/e-ticket.html', function () {
//     return view('admin/alerts/');
// });

Route::get('/admin', function () {
    return view('admin/users/index');
});




    Route::get('/sign_in.html', [AuthController::class, 'getLogin'])->name('login');
     Route::post('/sign_in.html', [AuthController::class, 'postLogin']); 
     Route::get('/register.html', [AuthController::class, 'getRegister'])->name('register');
     Route::post('/register.html', [AuthController::class, 'postRegister']); 

    Route::get('logout', [AuthController::class, 'getLogout'
]);



Route::get('/login', [AuthController::class, 'login']);
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
