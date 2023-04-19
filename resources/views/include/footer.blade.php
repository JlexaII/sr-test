    <!-- Footer ko'zi-->
    <div>
        <footer class="bg-info-subtle d-none d-md-flex d-xl-flex">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col">
                        <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Ltd. Guvohnoma № 637736</span>
                    </div>
                    <div class="col">
                        <h6 class="text-center">Telefon: +998 33 360 60 28</h6>
                    </div>
                    <div class="col-2">
                        <ul class="row" style="list-style: none;">
                            <li class="col-sm"><a href="https://t.me/SilksRoads" class="bi" target="_blank"><svg class=""
                                        width="24" height="24">
                                        <use xlink:href="#telegram"></use>
                                    </svg></a></li>
                            <li class="col-sm"><a href="https://www.instagram.com/silks1roads" target="_blank"><svg
                                        class="bi" width="24" height="24">
                                        <use xlink:href="#instagram"></use>
                                    </svg></a></li>
                            <li class="col-sm"><a href="https://www.facebook.com/SRMarketpleace" target="_blank"><svg
                                        class="bi" width="24" height="24">
                                        <use xlink:href="#facebook"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
        </footer>


        <!-- Menyu telefonlari uchun-->
        <footer class="d-md-none d-md-block d-flex justify-content-center fixed-bottom">
            <div class="btn-group me-2" role="group" aria-label="Basic example">
                <button type="button" class="btn bg-info bg-opacity-75" onclick="isAsosiy()"><i
                        class="fa-solid fa-house fa-1x"></i>
                    <h6 class="text center">Asosiy</h6>
                </button>
                <button type="button" class="btn bg-info bg-opacity-75" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-controls="collapseExample"><i class="fa fa-bars fa-1x"></i>
                    <h6 class="text center">Turkum</h6>
                </button>

                <button type="button" class="btn bg-info bg-opacity-75" data-bs-toggle="modal"
                    data-bs-target="#SBasket"><i class="fa-solid fa-cart-shopping fa-1x"></i>
                    <h6 class="text center basket">Savat</h6>
                </button>
                @if (Route::has('login'))
                    @auth
                        <div class="dropup-center dropup">
                            @if (request()->user()->hasVerifiedEmail())
                                <button class="btn bg-success bg-opacity-75" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-user fa-1x"></i>
                                    <h6 class="text center">Profil</h6>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('kabinet') }}">Kabinet</a></li>
                                    <li><a class="dropdown-item" href="#">Zakazlar</a></li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();">Chiqish</a>
                                        </li>
                                    </form>
                                </ul>
                        </div>
                    @else
                        <form action="{{ route('verification.send') }}" method="post" autocomplete="off">
                            @csrf

                            <div>
                                <button type="submit" class="flex text-white dropdown-item bg-danger bg-opacity-75">Xatni
                                    <br> takroran <br> jo`natish</button>
                            </div>
                        </form>
                    @endif
                @else
                    <button type="button" class="btn bg-info bg-opacity-75" data-bs-toggle="modal"
                        data-bs-target="#ModalK">
                        <i class="fa-solid fa-user fa-1x"></i>
                        <h6 class="text center">Profil</h6>
                    </button>
                @endauth
                @endif
            </div>
        </footer>
    </div>
