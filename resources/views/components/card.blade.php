@props(['immagine','nome', 'cognome', 'descrizione'])




            
        
<div class="card  my-3 text-center border-2 border-success" style="width: 22rem;">
           <img src="{{$immagine}}" class="card-img rounded-pill" alt="">
            <div class="card-body ">
                <h5 class="card-title fs-5">{{$nome}}</h5>
                <h5 class="card-text fs-5">{{$cognome}}</h5>
                <p class="card-text fs-5">{{$descrizione}}</p>
            </div>
</div>    