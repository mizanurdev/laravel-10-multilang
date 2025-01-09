<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

if (!function_exists('parseLocale')) {
    function parseLocale()
    {
        $locale = request()->segment(1);
        if (in_array($locale, ['js', 'css'])) {
            return $locale;
        }
        if (array_key_exists($locale, config('languages'))) {
            app()->setLocale($locale);
            return $locale;
        }
        app()->setLocale('en');
        return '/';
    }
}
Route::prefix(parseLocale())->group(function () {

    Route::get('/',[FrontendController::class,'index'])->name('home.page');
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::middleware(['auth','role:user','verified'])->group(function () {
        Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
    });
    Route::middleware(['auth','role:admin','verified'])->group(function () {
        Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('/admin/dashboard/team',[TeamController::class,'index'])->name('team.index');
        Route::post('/admin/dashboard/team/store',[TeamController::class,'store'])->name('team.store');
        Route::delete('/admin/dashboard/team/delete/{id}',[TeamController::class,'destroy'])->name('team.destroy');
    });
});


require __DIR__.'/auth.php';
