<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.list');
Route::get('/employee/add', [EmployeeController::class, 'create'])->name('employee.add');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.save');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
Route::get('/employee/view/{id}', [EmployeeController::class, 'view'])->name('employee.view');

