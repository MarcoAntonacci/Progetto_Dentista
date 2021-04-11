<x-layout>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 text-center fw-bold fs-2">Il nostro fantastico team</h2>
            </div>
        </div>
    </div>

    
   <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($chi_siamo as $persona)
           
            <div class="col-12 col-md-5 mx-5">
                <x-card
               immagine="{{$persona['immagine']}}"
               nome="{{$persona['nome']}}"
               cognome="{{$persona['cognome']}}"
               descrizione="{{$persona['descrizione']}}"
                
                
                
                />

            </div>
            @endforeach
        </div>
    </div>
  </div>
  



</x-layout>