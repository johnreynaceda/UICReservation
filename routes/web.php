<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

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

    return view('welcome');
});

Route::get('/dashboard', function () {
    // return Inertia::render('Dashboard');
    if (auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');

    } else {
        dd('user');
    }
})->middleware(['auth', 'verified'])->name('dashboard');


//admin

Route::prefix('admin/dashboard')
    ->controller(DashboardController::class)
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', 'index')->name('admin.dashboard');
    });

Route::prefix('admin/department')
    ->controller(DepartmentController::class)
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', 'index')->name('admin.department');
        // Route::get('/create', 'create')->name('admin.users.create');
        // Route::post('/', 'store')->name('admin.users.store');
        // Route::get('/{user}/edit', 'edit')->name('admin.users.edit');
        // Route::patch('/{user}/update', 'update')->name('admin.users.update');
        // Route::delete('/{user}/delete', 'destroy')->name('admin.users.destroy');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
