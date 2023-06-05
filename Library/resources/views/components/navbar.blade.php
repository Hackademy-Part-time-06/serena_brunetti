<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/libri">Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/libri">Home</a>
                </li>

                @auth

                    <li class="nav-item">
                        <a class="nav-link" href="/libri/crea">Inserisci il tuo libro</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao {{ Auth::user()->name }}!
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" role="button"
                                        onclick="event.preventDefault(); this.closest('form').submit();">Esci</a>
                                </li>
                            </ul>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/libri/crea">Inserisci il tuo libro</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao Ospite!
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ Route('login') }}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{ Route('register') }}">Registrati</a></li>
                        </ul>
                    </li>
                @endauth


            </ul>

        </div>
    </div>
</nav>
