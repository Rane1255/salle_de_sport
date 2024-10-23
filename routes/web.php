<?php

use App\HTTP\Controllers\AccueilController;
use App\HTTP\Controllers\CoursController;
use App\HTTP\Controllers\TarifsController;
use App\HTTP\Controllers\ContactController;
use App\HTTP\Controllers\MentionsLegalesController;

use Illuminate\Support\Facades\Route;

Route::get('/', [AccueilController::class, 'index'])->name('accueil.index');
Route::get('/cours', [CoursController::class, 'index'])->name('cours.index');
Route::get('/tarifs',[TarifsController::class, 'index'])->name('tarifs.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('mentions-legales.index');
