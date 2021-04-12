@props(['tipo', 'spiegazione', 'immagine'])




            
        
<div class="card  my-3 text-center border-2 border-success" style="width: 20rem;">
           <img src="{{$immagine}}" class="card-img rounded-pill" alt="">
            <div class="card-body ">
                <h5 class="card-title fs-5">{{$tipo}}</h5>
                <p class="card-text fs-5">{{$spiegazione}}</p>
               
                @if (Route::currentRouteName() == 'servizi')
                <a href="{{route('ortodonzia',['tipo'=>$tipo])}}" class="btn btn-success rounded-pill">Scopri di più</a> 
               
               
                @else
               <a href="{{route('servizi')}}"class="btn btn-success rounded-pill">Torna Indietro</a>
                @endif
                
           
            </div>
</div>    