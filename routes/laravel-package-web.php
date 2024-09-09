<?php 

use Illuminate\Support\Facades\Route;
use Prositedeveloper\Package\Http\Controllers\LaravelPackageController;

Route::get('/laravel-package', [LaravelPackageController::class, 'home'])->name('laravel-package.home');