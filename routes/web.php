<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/',App\Http\Livewire\Website\Home::class)->name('/');
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', App\Http\Livewire\Admin\Dashboard::class)->name('dashboard');
});

Route::get('cart', App\Http\Livewire\Website\Carts\Carts::class)->name('cart')->middleware('auth');
Route::get('favorites', App\Http\Livewire\Website\Favorites\Favorites::class)->name('favorites')->middleware('auth');
Route::get('checkout', App\Http\Livewire\Website\Checkout\Checkout::class)->name('checkout')->middleware('auth');
Route::get('orders', App\Http\Livewire\Website\Orders\Orders::class)->name('orders')->middleware('auth');
Route::get('my_reservations', App\Http\Livewire\Website\Reservations\MyReservations::class)->name('myReservations')->middleware('auth');

