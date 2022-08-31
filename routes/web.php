<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function() {
    Route::get('lan-change', [LanguageController::class, 'langChange'])->name('lan.change');

    Route::get('companies', [CompaniesController::class, 'index'])->name('companies');
    Route::get('companies/create', [CompaniesController::class, 'create'])->name('companiesCreate');
    Route::post('companies', [CompaniesController::class, 'store']);
    Route::get('companies/{company}', [CompaniesController::class, 'view']);
    Route::delete('companies/{company}', [CompaniesController::class, 'destroy']);
    Route::get('companies/{company}/edit', [CompaniesController::class, 'edit']);
    Route::patch('companies/{company}', [CompaniesController::class, 'update']);

    Route::get('employees', [EmployeesController::class, 'index'])->name('employees');
    Route::get('employees/create', [EmployeesController::class, 'create'])->name('employeesCreate');
    Route::post('employees', [EmployeesController::class, 'store']);
    Route::get('employees/{employee}', [EmployeesController::class, 'view']);
    Route::delete('employees/{employee}', [EmployeesController::class, 'destroy']);
    Route::get('employees/{employee}/edit', [EmployeesController::class, 'edit']);
    Route::patch('employees/{employee}', [EmployeesController::class, 'update']);
});

require __DIR__.'/auth.php';
