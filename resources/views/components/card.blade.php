@props(['immagine','nome', 'cognome', 'descrizione'])




            
        
<div class="card mx-3 my-3 text-center " style="width: 18rem;">
           <img src="{{$immagine}}" class="card-img img-size" alt="">
            <div class="card-body ">
                <h5 class="card-title">{{$nome}}</h5>
                <h5 class="card-text">{{$cognome}}</h5>
                <p class="card-text">{{$descrizione}}</p>
            </div>
</div>    