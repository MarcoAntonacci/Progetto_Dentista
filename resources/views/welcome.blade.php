<x-layout>


    @if (session('message'))
        <div class="alert alert-success mt-5 fw-bold fs-4">
          {{ session ('message')}}
        </div>
    @endif
{{-- HEADER --}}

  <!-- Full Page Image Header with Vertically Centered Content -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="fs-1 fw-bold">Studio Dentistico Boccasana</h1>
          <p class="lead fs-3">Viale xxxxxx   Numero di telefono: xxxxx </p>
        </div>
      </div>
    </div>
  </header>
  
   <section class="container my-5">
       <div class="row">
           <h2 class="fw-bold mb-5">Un sistema professionale a garanzia del paziente</h2>
           <div class="col-12 col-md-7 px-5"><img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" alt="" class="img-fluid"></div>
           <div class="col-12 col-md-4 custom-box">
            <p class="fs-5 p-5">Boccasana ti offre un mondo di cura e prevenzione in unico centro: con la presenza di esperti in ogni tipologia di trattamento possono venire soddisfatte le esigenze di ogni paziente. Grande importanza è data al rapporto di fiducia tra medico e paziente
              <ul class="px-5 fs-5">
                <li>Igiente dentale</li>
                <li>Sei portatore di dentiera?</li>
                <li>Ortodonzia</li>
              </ul>
            </p> 
          </div>
       </div>
   </section>


  









</x-layout>