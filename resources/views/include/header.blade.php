@section('header')

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="facebook" viewBox="0 0 16 16">
            <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </symbol>
        <symbol id="telegram" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
        </symbol>
    </svg>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-info bg-opacity-75">
            <a class="logo" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><img
                    src="images/logo.png" width="150" height="50">
            </a>
            <a class="logo">
                <img src="images/pngwing.png" alt="Tuyalar" width="150" height="50">
            </a>
            <div class="container-xxl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown d-none d-md-block">
                            <a class="nav-link" href="#" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Turkum</a>
                        </li>
                        <li class="nav-item d-md-block">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#SHeart"><i
                                    class="fa fa-heart heart-p"></i></a>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link basket" data-bs-toggle="modal" data-bs-target="#SBasket" href="#"><i
                                    class="fa fa-shopping-cart"></i></a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item d-none d-md-block">
                                    <div class="btn-group">
                                        <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                                        <ul class="dropdown-menu">
                                            @if (request()->user()->hasVerifiedEmail())
                                                <li><a class="dropdown-item" href="{{ route('kabinet') }}">Kabinet</a></li>
                                                <li><a class="dropdown-item" href="#">Zakazlar</a></li>
                                                <form action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); this.closest('form').submit();">Chiqish</a>
                                                    </li>
                                                </form>
                                            @else
                                                <form action="{{ route('verification.send') }}" method="post" 
                                                    autocomplete="off">
                                                    @csrf

                                                    <div>
                                                        <button type="submit" class="flex text-danger dropdown-item">Xatni
                                                            takroran jo`natish</button>
                                                    </div>
                                                </form>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                            @else
                                @guest
                                    <li class="nav-item d-none d-md-block">
                                        <a class="nav-link" aria-expanded="false" data-bs-toggle="modal" data-bs-target="#ModalK"
                                            href="#"><i class="fa fa-user"></i></a>
                                    </li>
                                @endguest
                            @endauth
                        @endif
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Mahsulot qidirish" aria-label="Search">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
