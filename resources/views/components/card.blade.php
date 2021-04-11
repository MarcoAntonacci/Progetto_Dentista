@props(['immagine','nome', 'cognome', 'descrizione'])




            
        
<div class="card mx-3 my-3 text-center border-2 border-success " style="width: 25rem;">
           <img src="{{$immagine}}" class="card-img rounded-circle" alt="">
            <div class="card-body ">
                <h5 class="card-title fs-5">{{$nome}}</h5>
                <h5 class="card-text fs-5">{{$cognome}}</h5>
                <p class="card-text fs-5">{{$descrizione}}</p>
            </div>
</div>    