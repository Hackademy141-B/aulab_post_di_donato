<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @auth
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      Benvenuto {{Auth::user()->name}}
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">Profile</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#"
        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
      <form method="post" action="{{route('logout')}}">
        @csrf
      </form>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
    </li>
  @endauth
      @guest
    <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">
      Accedi
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('register')}}">
      Registrati
      </a>
    </li>
  @endguest
    </ul>
  </div>
</nav>