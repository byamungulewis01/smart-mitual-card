<?php

use App\Http\Controllers\FamilyHeaderController;
use App\Http\Controllers\FamilyMemberController;
use App\Http\Controllers\IremboController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchFamilyController;
use App\Http\Controllers\SectorSettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return to_route('login');
})->name('home');
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('guest')->prefix('sector')->name('sector.')->group(function () {
    Route::resource('families', FamilyHeaderController::class);
    Route::get('families/getSectors/{district}', [FamilyHeaderController::class, 'getSectors'])->name('families.getSectors');
    Route::get('families/getCells/{sector}', [FamilyHeaderController::class, 'getCells'])->name('families.getCells');
    Route::get('families/getVillages/{cell}', [FamilyHeaderController::class, 'getVillages'])->name('families.getVillages');

    Route::resource('family-members', FamilyMemberController::class);
    Route::controller(SectorSettingsController::class)->prefix('mutual-categories')->name('mutual-categories.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });
});
Route::middleware('guest')->prefix('irembo')->name('irembo.')->group(function () {
    Route::get('mutuelle', [IremboController::class,'mutuelle'])->name('mutuelle');
    Route::get('payment-test', [IremboController::class,'test_payment']);
    Route::get('payment-callback', [IremboController::class,'callback'])->name('callback');
    Route::post('payment-test', [IremboController::class,'test_payment_store'])->name('test_payment_store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', UserController::class);
    Route::controller(SearchFamilyController::class)->group(function () {
        Route::get('/manual-search', 'manualSearch')->name('manualSearch');
        Route::get('/smart-search', 'smartSearch')->name('smartSearch');
        Route::get('/family/{family}', 'showFamily')->name('showFamily');
    });
});
require __DIR__ . '/auth.php';
