<x-layout>



    <div class="col-12 col-md-8 my-5 py-5 mx-5">
        <div class="row justify-content-center mx-3">
       
           
        <div class="col-12 col-sm-6 col-xl-3 mx-5 ">
                <x-card1
               tipo="{{$servizio['tipo']}}"
              spiegazione="{{$servizio['spiegazione']}}"
              immagine="{{$servizio['immagine']}}"
              
                
                
                
                />

        </div>
       
    </div>
      </div>


     
            <div class="col-12 col-md-5">
                <img src="https://images.unsplash.com/photo-1473232117216-c950d4ef2e14?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1013&q=80" alt="" class="img-fluid">
            </div>
        </div>
</x-layout>