<x-layout>

    <div class="container-fluid my-5">  
    
    <div class="row">
        
        <div class="col-12">
            <h2 class="my-5 fw-bold fs-1 text-center">I nostri servizi</h2>
        </div>
    </div>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($servizi as $servizio)
           
        <div class="col-12 col-md-5 mx-5">
                <x-card1
               tipo="{{$servizio['tipo']}}"
              spiegazione="{{$servizio['spiegazione']}}"
              immagine="{{$servizio['immagine']}}"
              
                
                
                
                />

        </div>
        @endforeach
    </div>
      </div>
  </div>


</x-layout>