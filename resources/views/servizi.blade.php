<x-layout>

    <div class="container-fluid my-5">  
    
    <div class="row">
        
        <div class="col-12">
            <h2 class="my-5">I nostri servizi</h2>
        </div>
    </div>
    </div>


    <div class="col-12 col-md-8 my-5 py-5 mx-5">
        <div class="row justify-content-center mx-3">
            @foreach ($servizi as $servizio)
           
        <div class="col-12 col-sm-6 col-xl-3 mx-5 ">
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