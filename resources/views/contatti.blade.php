<x-layout>

<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12">
            <h1>Form di contatti</h1>
        </div>
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('contatti.submit')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome Utente</label>
                  <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Descrizione</label>
                  <textarea name="message" id="exampleInputPassword1" cols="60" rows="5"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>
    </div>
</div>





</x-layout>