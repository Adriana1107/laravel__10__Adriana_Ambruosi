

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home')}}">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('articoli')}}">Tutti i nostri articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('articleCreate')}}">Crea articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contactUs.form')}}">contattaci</a>
        </li>

        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('login')}}">Accedi</a></li>
            <li><a class="dropdown-item" href="{{ route('register')}}">Registrati</a></li>
          <li>
            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
          </li>
          @endguest


          @auth
            <li class="nav-item">
               <span class="nav-link"> Ciao, <strong>{{ Auth::user()->name }}</strong></span>
           </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                      <button type="submit" class="nav-link btn btn-link" style="display:inline">
                          Logout
                      </button>
                  </form>
            </li>
            @endauth
      </ul>

    </div>
  </div>    
</nav>