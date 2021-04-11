@props(['tipo', 'spiegazione', 'immagine'])




            
        
<div class="card mx-3 my-3 text-center " style="width: 18rem;">
           <img src="{{$immagine}}" class="card-img img-size" alt="">
            <div class="card-body ">
                <h5 class="card-title">{{$tipo}}</h5>
                <p class="card-text">{{$spiegazione}}</p>
               
                @if (Route::currentRouteName() == 'servizi')
                <a href="{{route('ortodonzia',['tipo'=>$tipo])}}" class="btn btn-primary">Scopri di più...</a> 
               
                @else
               <a href="{{route('servizi')}}"class="btn btn-primary ">Torna Indietro</a>
                @endif
                
           
            </div>
</div>    