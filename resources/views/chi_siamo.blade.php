<x-layout>

   
    
   <div class="container-fluid">
    
        <div class="row justify-content-center background-img">
          <h2 class="my-5 text-center fw-bold fs-1">Il nostro fantastico team</h2>  
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
  
  
  <section class="container-fluid custom-box1 mt-5">
    
      <div class="row mx-5 ">
        <h2 class="fs-1 my-5 text-center fw-bold mb-4">Dicono di noi</h2>
          <div class="col-12 col-md-4 ">
              <img src="https://www.dentista.tv/wp-content/uploads/2017/06/Gloria-180x180.png" alt="" class="img-fluid rounded-circle mt-5">
            <p class="mt-5">Ho avuto dei problemi ai denti un po’ di tempo fa; carie, ecc… ad un certo punto, parlando con delle amiche, ho scoperto Dentista.tv. Ho fatto una visita e abbiamo risolto tutti i problemi!</p>
            <h5>Gloria</h5>
          </div>
          <div class="col-12 col-md-4">
            <img src="https://www.dentista.tv/wp-content/uploads/2017/06/Natasha-180x180.png" alt="" class="img-fluid rounded-circle mt-5">
          <p class="mt-5">Avevo paura del dentista. In passato, con altri professionisti, mi sono trovata male. Dentista.tv invece è sempre attento alle problematiche dei pazienti e da la possibilità a tutti di andare dal dentista spendendo poco e ricevendo servizi di qualità!</p>
          <h5>Natasha</h5>
        </div>
        <div class="col-12 col-md-4">
            <img src="https://www.dentista.tv/wp-content/uploads/2017/06/Lorenzo-180x180.png" alt="" class="img-fluid rounded-circle mt-5">
          <p class="mt-5">I miei primi problemi ai denti sono nati durante un infortunio che mi sono fatto facendo sport. Dentista.tv l’ho conosciuto attraverso il passaparola. I medici di Dentista.tv sono molto competenti, e li consiglio vivamente! Basta vedere i prezzi e la qualità dei servizi.</p>
          <h5>Lorenzo</h5>
        </div>
      </div>

      
  </section>


</x-layout>