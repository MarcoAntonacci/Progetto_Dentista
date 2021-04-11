<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, "home"])->name('home');

Route::get('/chi_siamo', [PublicController::class, "chi_siamo"])->name('chi_siamo');


Route::get('/servizi', [PublicController::class, "servizi"])->name('servizi');

Route::get('/contatti', [PublicController::class, "contatti"])->name('contatti');

Route::post('/contatti/submit', [PublicController::class, "submit"])->name('contatti.submit');

Route::get('/servizi/ortodonzia/{tipo}', [PublicController::class, "ortodonzia"])->name('ortodonzia');



// Route::get('/servizi/protesi', [PublicController::class, "protesi"])->name('protesi');

// Route::get('/servizi/igiene', [PublicController::class, "igiene"])->name('igiene');