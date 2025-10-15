

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home')}}">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('Articoli')}}">Tutti i nostri articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ArticleCreate')}}">Crea articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contactUs.form')}}">contattaci</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('login')}}">Accedi</a></li>
            <li><a class="dropdown-item" href="{{ route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" onclick="event.preventDefault; document.getElementById('form-logout').submit();" href="{{ route('logout')}}">Logout</a></li>
            <form action="{{ route ('logout') }}" method="post" style="display:none;" id="form-logout"> @csrf</form>
            <li><hr class="dropdown-divider"></li>
      
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>