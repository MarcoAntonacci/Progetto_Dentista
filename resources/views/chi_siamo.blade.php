<x-layout>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 text-center fw-bold fs-2">Il nostro fantastico team</h2>
            </div>
        </div>
    </div>

    
    <div class="col-12 col-md-6 my-5 py-5">
        <div class="row justify-content-between">
            @foreach ($chi_siamo as $persona)
           
        <div class="col-12 col-md-6 ">
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