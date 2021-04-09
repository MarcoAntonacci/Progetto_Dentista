<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, "home"])->name('home');

Route::get('/chi_siamo', [PublicController::class, "chi_siamo"])->name('chi_siamo');


Route::get('/servizi', [PublicController::class, "servizi"])->name('servizi');

Route::get('/contatti', [PublicController::class, "contatti"])->name('contatti');