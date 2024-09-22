<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\shiftController;



Route::get('/attendance', function () {
    return view('sections.attendance');
})->middleware('userAuth');

Route::get('/overtime', function () {
    return view('sections.overtime');
})->middleware('userAuth');

Route::get('/reports', function () {
    return view('sections.reports');
})->middleware('userAuth');


Route::get('/settings', function () {
    return view('sections.settings');
})->middleware('userAuth');


Route::get('/vacation', function () {
    return view('sections.vacations');
})->middleware('userAuth');

Route::get('/login-page', function () {
    return view('login');
});

// Controllers

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get ('/', [employeeController::class, 'show'])->name('show')->middleware('userAuth');

Route::get ('/employees', [employeeController::class, 'emplist'])->name('emplist')->middleware('userAuth');

Route::get ('/shift', [shiftController::class, 'index'])->name('index')->middleware('userAuth');

Route::get ('/schedule', [shiftController::class, 'ScheduleIndex'])->name('index')->middleware('userAuth');


