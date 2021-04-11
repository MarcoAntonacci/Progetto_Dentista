@props(['tipo', 'spiegazione', 'immagine'])




            
        
<div class="card mx-3 my-3 text-center border-2 border-success " style="width: 25rem;">
           <img src="{{$immagine}}" class="card-img rounded-circle" alt="">
            <div class="card-body ">
                <h5 class="card-title fs-5">{{$tipo}}</h5>
                <p class="card-text fs-5">{{$spiegazione}}</p>
               
                @if (Route::currentRouteName() == 'servizi')
                <a href="{{route('ortodonzia',['tipo'=>$tipo])}}" class="btn btn-success">Scopri di più</a> 
               
               
                @else
               <a href="{{route('servizi')}}"class="btn btn-success ">Torna Indietro</a>
                @endif
                
           
            </div>
</div>    