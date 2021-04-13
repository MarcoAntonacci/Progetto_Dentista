{{-- NAVBAR --}}



    <nav class="navbar navbar-expand-lg navbar-color px-4 sticky-top ">
        <div class="container-fluid">
          <a class="navbar-brand a-color" href="{{route('home')}}"><i class="fas fa-tooth fs-3 mx "></i></a>
          <button class="navbar-toggler a-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link a-color fw-bold" href="{{route('chi_siamo')}}">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link a-color fw-bold" href="{{route('servizi')}}">Servizi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link a-color fw-bold" href="{{route('contatti')}}">Contatti</a> 
              </li>
            </ul>
          </div>
        </div>
      </nav>