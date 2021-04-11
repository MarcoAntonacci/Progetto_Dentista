<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    
 public function home () {
    return view('welcome');
    }

public function chi_siamo () {


    $chi_siamo= [

        ['nome'=>'Lapo', 'cognome'=>'Elkann', 'descrizione'=>'Specializzato in odontostomatologia e chirurgia maxillo-facciale', 'immagine'=>'/img/img1.jpg'],
        ['nome'=>'Mario', 'cognome'=>'Balotelli', 'descrizione'=>'Chirurgia, Conservativa, Endodonzia e Protesica' ,'immagine'=>'/img/img2.jpg'],
        ['nome'=>'Ezio', 'cognome'=>'Greggio', 'descrizione'=>'Chirurgia, Conservativa, Endodonzia e Protesica', 'immagine'=>'/img/img3.jpg'],
        ['nome'=>'Enrico', 'cognome'=>'Papi', 'descrizione'=>'Chirurgia, Conservativa, Endodonzia e Protesica', 'immagine'=>'/img/img4.jpg'],


    ];




    return view('chi_siamo', ['chi_siamo'=>$chi_siamo]);
}


public function servizi () {

    $servizi=[

        ['tipo'=>'ortodonzia', 'spiegazione'=>'Il termine ortodonzia deriva dal greco antico e significa letteralmente diritta dentatura;' , 'immagine'=>'/img/img-1.jfif'],
        ['tipo'=>'chirurgia', 'spiegazione'=>'La chirurgia odontoiatrica è l’insieme delle terapie e trattamenti chirurgici effettuati all’interno del cavo orale.' , 'immagine'=>'/img/img-2.jfif'],
        ['tipo'=>'protesi Mobile', 'spiegazione'=>'Quando uno o più denti sono mancanti o altamente danneggiati, le protesi dentarie permettono di ricostruire la corretta funzione masticatoria.' , 'immagine'=>'/img/img-3.jfif'],
        ['tipo'=>'igiente Dentale', 'spiegazione'=>'L’igiene dentale professionale ripristina le condizioni ottimali di pulizia e salute dei denti. ' , 'immagine'=>'/img/img-4.jfif'],
    ];

    return view('servizi', ['servizi'=>$servizi]);
}



public function ortodonzia ($tipo) {

    $servizi=[

        ['tipo'=>'ortodonzia', 'spiegazione'=>'Il termine ortodonzia deriva dal greco antico e significa letteralmente diritta dentatura;' , 'immagine'=>'/img/img-1.jfif'],
        ['tipo'=>'chirurgia', 'spiegazione'=>'La chirurgia odontoiatrica è l’insieme delle terapie e trattamenti chirurgici effettuati all’interno del cavo orale.' , 'immagine'=>'/img/img-2.jfif'],
        ['tipo'=>'protesi Mobile', 'spiegazione'=>'Quando uno o più denti sono mancanti o altamente danneggiati, le protesi dentarie permettono di ricostruire la corretta funzione masticatoria.' , 'immagine'=>'/img/img-3.jfif'],
        ['tipo'=>'igiente Dentale', 'spiegazione'=>'L’igiene dentale professionale ripristina le condizioni ottimali di pulizia e salute dei denti. ' , 'immagine'=>'/img/img-4.jfif'],
    ];

        foreach ($servizi as $servizio) {
            if ($servizio['tipo'] == $tipo) {
        
                return view('ortodonzia', ['servizio'=>$servizio]);
            }
        }
}


// public function ortodonzia () {
//     return view('ortodonzia');
// }

// public function chirurgia () {
//     return view('chirurgia');
// }


// public function protesi () {
//     return view('protesi');
// }


// public function igiene () {
//     return view('igiene');
// }


public function contatti () {
    return view('contatti');
}


}
