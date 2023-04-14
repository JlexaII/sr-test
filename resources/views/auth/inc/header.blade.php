<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h5>
            Tarif:
            @if (auth()->user()->tarif < 101)
                Bepul
            @elseif (auth()->user()->tarif < 501)
                <h5 class="text-warning">"Savdogar"</h5>
            @elseif (auth()->user()->tarif < 1001)
                <h5 class="text-success">"Korxona"</h5>
            @elseif(auth()->user()->tarif < 1501)
                <h5 class="text-primary">"Kompaniya"</h5>
            @elseif (auth()->user()->tarif < 2001)
                <h5 class="text-secondary">"Korporaciya"</h5>
            @elseif(auth()->user()->tarif > 2001)
                <h5 class="text-danger">"V.I.P."</h5>
            @endif
        </h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong title="{{ auth()->user()->email }}">{{ Str::limit(auth()->user()->email, 8) }}</strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item nav-link" href="{{ route('avatar') }}">
                                <i class="fa fa-image" aria-hidden="true"></i>
                                Avatar
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('profile') }}" method="get">
                                @csrf
                                <a class="dropdown-item nav-link" href="#"
                                    onclick="event.preventDefault(); this.closest('form').submit();"><i
                                        class="fa-solid fa-camera-rotate fa-flip"></i>Profil</a>
                            </form>
                        </li>
                        <li>
                            <a class="dropdown-item nav-link" href="{{ route('sozlama') }}">
                                <i class="fa-solid fa-cog fa-spin"></i>
                                Sozlama
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-link" href="{{ route('cat-brend') }}">
                                <i class="fa-solid fa-cog fa-spin"></i>
                                Kategoriya va Brend
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item nav-link" href="/">
                                <i class="fa-solid fa-triangle-exclamation fa-fade"></i>
                                Chiqish</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('bozor') }}" class="nav-link">Bozor</a></li>
                <li><a href="{{ route('yordam') }}" class="nav-link">Yordam</a></li>
                <li><a href="{{ route('komp') }}" class="nav-link">Kompaniya</a></li>
            </ul>
        </div>
    </div>
</nav>
