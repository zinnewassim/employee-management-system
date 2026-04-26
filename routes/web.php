<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

// Employees list route
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
