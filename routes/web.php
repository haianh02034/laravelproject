<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Reques;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SeatSelectionController;
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
Route::get('/ticket-booking/{movie_id}', [BookingController::class, 'index'])->name('ticket-booking');

Route::get('/seat_sel.html', function () {
    return view('seat_sel');
});
Route::get('/e-ticket.html', function () {
    return view('e-ticket');
});
Route::get('/display_selection.html', function () {
    return view('display_selection');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/users', function () {
    return view('admin.users');
});
Route::get('seat_sel.html',function(){
    return view('seat_sel');
});
Route::get('payment.html',function(){
    return view('payment');
});
Route::get('payment.html',function(){
    return view('payment');
});

Route::get('/admin/users', [AdminController::class, 'ShowUser'])->name('ShowUser');
Route::post('/admin/users', 'AdminController@users')->name('admin.users');
Route::get('/admin/movies', function () {
    return view('admin.movies');
})->name('admin.movies');
Route::get('/admin/movieadd', [MovieController::class, 'add'])->name('add');
Route::post('/admin/movieadd', [MovieController::class, 'store'])->name('admin.movies.store');

Route::get('/movie/delete/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');
Route::get('/admin/useradd', function () {
    return view('admin.useradd');
});
Route::get('/admin/useredit', function () {
    return view('admin.useredit');
});
Route::get('/admin/orders', function () {
    return view('admin.orders');
});
Route::get('/admin/orderadd', function () {
    return view('admin.orderadd');
});
Route::get('/admin/master', function () {
    return view('admin.master');
});
// Route::get('/ticket-booking', [BookingController::class, 'index'])->name('ticket-booking');
// Route::get('/seat_sel', [BookingController::class, 'seatSelection'])->name('seat_sel');

    Route::get('/sign_in.html', [AuthController::class, 'getLogin'])->name('login');
     Route::post('/sign_in.html', [AuthController::class, 'postLogin']); 
     Route::get('/register.html', [AuthController::class, 'getRegister'])->name('register');
     Route::post('/register.html', [AuthController::class, 'postRegister']); 
    Route::get('logout', [AuthController::class, 'getLogout'
]);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
// Route hiển thị và cập nhật thông tin cá nhân
Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile');
Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
// Định nghĩa route cho trang seat_sel.html với tên là "seat-selection"
// Route::get('/seat-selection/{movie_id}/{selected_time}/{movie_title}', [SeatSelectionController::class, 'showSeatSelection'])->name('seat-selection');

Route::get('/movies/{id}/edit', 'MovieController@edit')->name('movies.edit');
Route::get('/movies', 'MovieController@index');
///
Route::get('/movies/{id}/showtimes', [MovieController::class, 'showtimes']);
Route::get('/ticket-booking', [BookingController::class, 'index'])->name('ticket-booking');
// Route::get('/seat-selection/{movie_title}', [SeatSelectionController::class, 'index'])->name('seat-selection');

Route::post('/movies/search', [MovieController::class, 'search'])->name('movies.search');

// web.php



// Define the route for "seat_sel"
// Define the route and associate it with the controller method
use Illuminate\Http\Request;

// Define the route to display the ticket booking form
Route::get('/ticket-booking', function () {
    return view('ticket-booking');
});

Route::post('/seat-selection', [SeatSelectionController::class, 'handleSeatSelection'])->name('seatSelection');


