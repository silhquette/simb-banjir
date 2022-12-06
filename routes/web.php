<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::get('/', [NewsController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route untuk tambah berita
Route::resource('berita', NewsController::class, [
    'as' => 'berita'
]);

// route untuk mitigasi
Route::get('edukasi-bencana', function() {
    return view('mitigasi');
})->name('mitigasi');

// route untuk kontak
Route::get('kontak', function() {
    return view('contact');
})->name('kontak');

Route::post('kontak', [ContactController::class, 'store']);


// route untuk laporan
Route::get('laporan', function() {
    return view('report');
})->name('laporan');

Route::post('laporan', [ReportController::class, 'store']);

require __DIR__.'/auth.php';
