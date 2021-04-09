<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    
 public function home () {
    return view('welcome');
    }

public function chi_siamo () {
    return view('chi_siamo');
}

public function servizi () {
    return view('servizi');
}

public function contatti () {
    return view('contatti');
}

}
