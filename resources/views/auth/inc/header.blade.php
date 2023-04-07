<div class="container py-1">

    <header class="d-flex justify-content-center">
        <div class="dropdown">
            <a href="#"
                class="bs-primary-border-subtle btn d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/images/access.png" alt="" width="52" height="52" class="rounded-circle me-2">
                <strong>{{ request()->user()->email }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">

                <li>
                    <a class="dropdown-item" href="{{ route('sozlama') }}">
                        <i class="fa-solid fa-cog fa-spin"></i>
                        Sozlama
                    </a>
                </li>
                <li>
                    <form action="{{ route('profil') }}" method="get">
                        @csrf
                        <button class="dropdown-item nav-link text-right">
                            <i class="fa-solid fa-camera-rotate fa-flip"></i>
                            Profil</button>
                    </form>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/">
                        <i class="fa-solid fa-triangle-exclamation fa-fade"></i>
                        Chiqish</a></li>
            </ul>
        </div>

        <ul class="align-items-center nav nav-pills">
            <li class="nav-item"><a href="{{ route('bozor') }}" class="nav-link">Bozor</a></li>
            <li class="nav-item"><a href="{{ route('narxlar') }}" class="nav-link">Narxlar</a></li>
            <li class="nav-item"><a href="{{ route('yordam') }}" class="nav-link">Yordam</a></li>
            <li class="nav-item"><a href="{{ route('komp') }}" class="nav-link">Kompaniya</a></li>
        </ul>
    </header>
</div>
