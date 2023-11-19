<?php

use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBookController;
use App\Http\Controllers\DashboardLoanController;
use App\Http\Controllers\DashboardRoomController;
use App\Http\Controllers\DashboardBookingRoomController;
use App\Models\Room;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'books' => Book::latest()->paginate('8'),
        'rooms' => Room::latest()->get(),
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'users' => User::all()
    ]);
})->middleware('auth');

Route::get('/dashboard/books/checkSlug', [DashboardBookController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/books', DashboardBookController::class)->middleware('auth');

Route::resource('/dashboard/rooms', DashboardRoomController::class)->middleware('auth');

Route::get('/dashboard/loans', [DashboardLoanController::class, 'index'])->middleware('auth');
Route::post('/dashboard/loans/confirm', [DashboardLoanController::class, 'confirmPinjam'])->middleware('auth');
Route::get('/dashboard/loans/management', [DashboardLoanController::class, 'management'])->middleware('auth');
Route::get('/dashboard/loans/history-return', [DashboardLoanController::class, 'returnedHistory'])->middleware('auth');
Route::get('/dashboard/loans/{slug}', [DashboardLoanController::class, 'pinjam'])->middleware('auth');
Route::get('/dashboard/loans/grantLoan/{id}', [DashboardLoanController::class, 'grantLoan'])->middleware('auth');
Route::get('/dashboard/loans/grantReturn/{id}', [DashboardLoanController::class, 'grantReturn'])->middleware('auth');

Route::get('/dashboard/booking/management', [DashboardBookingRoomController::class, 'management'])->middleware('auth');

Route::post('/dashboard/bookings/confirm', [DashboardBookingRoomController::class, 'confirmSewa'])->middleware('auth');
Route::get('/dashboard/bookings/{slug}', [DashboardBookingRoomController::class, 'sewa'])->middleware('auth');
Route::get('/dashboard/bookings/grantIn/{id}', [DashboardBookingRoomController::class, 'grantIn'])->middleware('auth');
Route::get('/dashboard/bookings/grantOut/{id}', [DashboardBookingRoomController::class, 'grantOut'])->middleware('auth');
