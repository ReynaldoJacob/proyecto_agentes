<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Agent\PropertyController as AgentPropertyController;
use App\Models\Property;

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
    $featuredProperties = Property::where('is_featured', true)
        ->where('is_active', true)
        ->where('status', 'disponible')
        ->latest()
        ->limit(6)
        ->get();
    return view('landing', compact('featuredProperties'));
});

Route::get('/vue', function () {
    return view('vue');
});

// Properties Routes
Route::get('/properties', [PropertiesController::class, 'index'])->name('properties.index');
Route::get('/properties/{property}', [PropertiesController::class, 'show'])->name('properties.show');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes - Admin Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('role:admin')->name('admin.dashboard');

    // Agent Routes
    Route::middleware('role:agente')->prefix('agent')->name('agent.')->group(function () {
        Route::get('/dashboard', function () {
            return view('agent.dashboard');
        })->name('dashboard');

        Route::get('/password', [AuthController::class, 'showChangePasswordForm'])->name('password');
        Route::post('/password', [AuthController::class, 'changePassword'])->name('password.update');
        Route::post('/email', [AuthController::class, 'changeEmail'])->name('email.update');

        Route::resource('properties', AgentPropertyController::class);
    });
});
