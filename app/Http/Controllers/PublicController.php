<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    
 public function home () {
    return view('welcome');
    }

public function chi_siamo () {


    $chi_siamo= [

        ['nome'=>'Lapo', 'cognome'=>'Elkann', 'descrizione'=>'Odontostomatologia, chirurgia maxillo-facciale', 'immagine'=>'/img/img1.jpg'],
        ['nome'=>'Mario', 'cognome'=>'Balotelli', 'descrizione'=>'Chirurgia, Conservativa, Endodonzia e Protesica' ,'immagine'=>'/img/img2.jpg'],
        ['nome'=>'Ezio', 'cognome'=>'Greggio', 'descrizione'=>'Chirurgia, Conservativa, Endodonzia e Protesica', 'immagine'=>'/img/img3.jpg'],
        ['nome'=>'Enrico', 'cognome'=>'Papi', 'descrizione'=>'Chirurgia, Conservativa, Endodonzia e Protesica', 'immagine'=>'/img/img4.jpg'],


    ];




    return view('chi_siamo', ['chi_siamo'=>$chi_siamo]);
}


public function servizi () {

    $servizi=[

        ['tipo'=>'Ortodonzia', 'spiegazione'=>'Il termine ortodonzia deriva dal greco antico e significa letteralmente diritta dentatura il ...' , 'immagine'=>'/img/img-1.jfif'],
        ['tipo'=>'Chirurgia', 'spiegazione'=>'La chirurgia odontoiatrica è l’insieme delle terapie e trattamenti chirurgici effettuati all’interno...' , 'immagine'=>'/img/img-2.jfif'],
        ['tipo'=>'Protesi Mobile', 'spiegazione'=>'Quando uno o più denti sono mancanti o altamente danneggiati, le protesi dentarie permettono di...' , 'immagine'=>'/img/img-3.jfif'],
        ['tipo'=>'Igiente Dentale', 'spiegazione'=>'L’igiene dentale professionale ripristina le condizioni ottimali di pulizia e salute dei denti... ' , 'immagine'=>'/img/img-4.jfif'],
    ];

    return view('servizi', ['servizi'=>$servizi]);
}



public function ortodonzia ($tipo) {

    $servizi=[

        ['tipo'=>'Ortodonzia', 'spiegazione'=>'Il termine ortodonzia deriva dal greco antico e significa letteralmente diritta dentatura il il linguaggio scientifico ricorre spesso al termine “ortognatodonzia”, denominazione più estesa che indica corretti rapporti sia dentali che scheletrici. In realtà l’ortodonzia consente di ottenere benefici non limitati al corretto allineamento dei denti ma tesi anche a migliorare l’equilibrio estetico delle labbra e del volto, ad assicurare una maggiore efficacia della funzione masticatoria e a favorire la conservazione della salute dei denti e dei tessuti di sostegno.' , 'immagine'=>'/img/img-1.jfif'],
        ['tipo'=>'Chirurgia', 'spiegazione'=>'La chirurgia odontoiatrica è l’insieme delle terapie e trattamenti chirurgici effettuati all’interno. Nel corso dell ultimo secolo, lo sviluppo delle conoscenze, la specificità di approccio a determinate malattie ed il loro incremento hanno reso necessario suddividere la chirurgia generale in numerose branche specialistiche: alcune dedicate alla medesima patologia, altre volte dedicate, invece, a quella specifica d organo o di apparato (cardiochirurgia, chirurgia orale, chirurgia toracica) o, ancora, alla medesima finalità (chirurgia plastica e ricostruttiva) o caratterizzate da tecniche peculiari (chirurgia laparoscopica, chirurgia robotica, chirurgia endoscopica)' , 'immagine'=>'/img/img-2.jfif'],
        ['tipo'=>'Protesi Mobile', 'spiegazione'=>'Quando uno o più denti sono mancanti o altamente danneggiati, le protesi dentarie permettono di La mancanza di numerosi o tutti i denti di una arcata può essere risolta con l ausilio di una protesi mobile definita protesi mobile parziale o totale. La costruzione di una protesi si serve di impronte e rilevazioni delle misure del cavo orale del paziente.
        La protesi mobile parziale è tenuta in sede con dei ganci ancorati ai denti residui.
        La protesi mobile totale invece resta in posizione per effetto ventosa nell arcata superiore, e per la sola forza di gravità inferiormente. ' , 'immagine'=>'/img/img-3.jfif'],
        ['tipo'=>'Igiente Dentale', 'spiegazione'=>'L’igiene dentale professionale ripristina le condizioni ottimali di pulizia e salute dei denti L’igiene dentale effettuata da un igienista ogni 6-12 mesi (a seconda di ogni singolo paziente) consente di arrivare alle zone meno raggiungibili con gli strumenti casalinghi (spazzolino, dentifricio, filo interdentale e scovolino) e rimuovere a fondo placca, tartaro e batteri.

        La regolarità dei trattamenti di igiene dentale previene il formarsi della carie e di tutte le sue conseguenze: dalle semplici infiammazioni alle gengive fino ai casi più gravi di piorrea, passando per le parodontiti. ' , 'immagine'=>'/img/img-4.jfif'],
    ];
 
        foreach ($servizi as $servizio) {
            if ($servizio['tipo'] == $tipo) {
        
                return view('ortodonzia', ['servizio'=>$servizio]);
            }
        }
}







// public function protesi () {
//     return view('protesi');
// }


// public function igiene () {
//     return view('igiene');
// }


public function contatti () {
    return view('contatti');
}

public function submit (Request $req){

  $user=$req->input('user');
  $message=$req->input('message');
  $email=$req->input('email');
  $contact= compact('user', 'message');

  

  Mail::to($email)->send(new ContactMail($contact));

 return redirect(route('home'))->with('message', 'La tua richiesta è stata inoltrata');
}

}
