<x-layout>


<div class="container-fluid background-img">
    <div class="row justify-content-around">
        <div class="col-6  my-5 py-5 ">
         
                    <x-card1
                   tipo="{{$servizio['tipo']}}"
                  spiegazione="{{$servizio['spiegazione']}}"
                  immagine="{{$servizio['immagine']}}"
                  
                    
                    
                    
                    />
    
            </div>
           
        </div>
          </div>
    </div>
</div>
 

      <h2 class="fs-1 my-4 mx-5">Altri Servizi</h2>
      <section class="container">
          <div class="row">
              <div class="col-12 col-md-5">
                  <img src="https://cdn.studiodentisticoamodio.it/pagine/immagini/1000/800/C/f594295661ab9a383a0b296345689339/1583937202__7_7.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-12 col-md-5">
                  <h2 class="fs-3 border-success border-bottom">
                    Scanner intraorale, la telecamera 3D
                  </h2>
                  <p class="fs-5 mt-3">
                    Grazie alla telecamera 3D possiamo rilevare, in modo più confortevole e veloce, le impronte della bocca senza l’utilizzo di paste. Questa tecnologia ci permette di accelerare i tempi di rilevazione e di consegna della protesi, nonché i tempi per la realizzazione degli allineatori trasparenti in ortodonzia.
                  </p>
              </div>
          </div>

          <div class="row mt-5">
            <div class="col-12 col-md-5">
                <h2 class="fs-3 border-success border-bottom">
                    Laser
                </h2>
                <p class="fs-5 mt-3">
                    Per lo sbiancamento dei denti, la cura della parodontite e di carie senza anestesia per i bambini, l’utilizzo del laser è il metodo più efficace, che consente di evitare di ricorrere alla chirurgia classica e di eliminare batteri anche nelle zone non raggiungibili con i farmaci.
                </p>
            </div>

            <div class="col-12 col-md-5">
                <img src="https://cdn.studiodentisticoamodio.it/pagine/immagini/1000/800/C/877bf6aab5a4b1634b35e5c8fc9479ba/1583937448__8_8.jpg" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-md-5">
                <img src="https://cdn.studiodentisticoamodio.it/pagine/immagini/1000/800/C/31909157a0d209814b550c19b88af924/1583937448__9_9.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-5">
                <h2 class="fs-3 border-success border-bottom">
                    Piezosurgery, chirurgia ossea non invasiva
                </h2>
                <p class="fs-5 mt-3">
                    Questo sistema di chirurgia è in grado di tagliare l’osso senza necrotizzarlo e senza danneggiare vasi, nervi e tessuti molli adiacenti. Funziona mediante vibrazioni ultrasoniche che garantiscono sicurezza e minore invasività chirurgica, con un decorso Post-operatorio più rapido e meno traumatico.
                </p>
            </div>
        </div>
      </section>


      <a href="{{route('home')}}" class="btn btn-success rounded-pill  position-absolute  start-50 translate-middle">Torna alla home</a>
           
        
</x-layout>