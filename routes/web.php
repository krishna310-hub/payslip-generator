<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payslipController;

Route::get('index',[payslipController::class,'payslip'])->name('index');
Route::post('index', [payslipController::class,'store'])->name('index');

Route::get('sample',[payslipController::class,'sample'])->name('sample');

Route::get('/', function () {
    return view('welcome');
});
