<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h3>Shahsiy kabinet</h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-auto mb-1">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>{{ request()->user()->email }}</strong>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('sozlama') }}">
                                <i class="fa-solid fa-cog fa-spin"></i>
                                Sozlama
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('profile') }}" method="get">
                                @csrf
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fa-solid fa-camera-rotate fa-flip"></i>Profil</a>                                
                            </form>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/">
                                <i class="fa-solid fa-triangle-exclamation fa-fade"></i>
                                Chiqish</a></li>
                    </ul>
                </li>
                <li class="nav-link"><a href="{{ route('bozor') }}" class="nav-link">Bozor</a></li>
                <li class="nav-link"><a href="{{ route('yordam') }}" class="nav-link">Yordam</a></li>
                <li class="nav-link"><a href="{{ route('komp') }}" class="nav-link">Kompaniya</a></li>
            </ul>
        </div>
    </div>
</nav>
