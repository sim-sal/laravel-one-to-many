<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoggedController;
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

// INDEX
Route::get('/', [GuestController::class, 'index'])
    ->name('project.index');

// SHOW
Route::get('/show{id}', [LoggedController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('project.show');

// CREATE/STORE
Route::get('/create', [LoggedController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('project.create');
Route::post('/store', [LoggedController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('project.store');

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
