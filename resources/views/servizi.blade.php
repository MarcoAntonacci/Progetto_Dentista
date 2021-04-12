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
           
        <div class="col-12 col-md-5">
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


  <div class="container-fluid mt-5 border-success border-top">
    <h2 class="fs-2 my-4 ">Orari</h2>
      <div class="row">
          <div class="col-12 col-md-5">
              
             <p class="fs-5">Lunedì 9:30 - 13:00</p> 
             <p class="fs-5">Martedì 9:30 - 13:00</p>
             <p class="fs-5">Mercoledì 9:30 - 13:00</p>
             <p class="fs-5">Giovedì 9:30 - 13:00</p>
             <p class="fs-5">Venerdì 9:30 - 13:00 </p>
             <p class="fs-5">Sabato 9:30 - 13:00</p>
             <p class="fs-5">Domenica 9:30 - 13:00</p>

          </div>

        <div class="col-12 col-md-4">
            <img src="https://cdn.studiodentisticoamodio.it/pagine/immagini/650/500/C/96366839365c9bcd516ac3e500757583/1583938729__13_13.jpg" alt="" class="img-fluid">
        </div>
         
      </div>
  </div>



</x-layout>