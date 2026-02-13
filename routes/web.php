<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/project/{id}', [PortfolioController::class, 'show'])->name('project.show');



