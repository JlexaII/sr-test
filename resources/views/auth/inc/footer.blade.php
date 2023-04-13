@section('footer')

    <footer class="align-items-center py-3 my-4 border-top border border-info d-none d-md-flex d-xl-flex">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/kabinet" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="3" height="4"><img src="/images/SR.svg" width="50" height="50" /></svg>
            </a>
            <span class="mb-3 mb-md-0 text-black">&copy; 2023 Silks Roads, Axmedov's Ltd</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook" />
                    </svg></a></li>
        </ul>
    </footer>

    <!-- Menyu telefonlari uchun-->

    <footer class="d-md-none d-md-block sticky-bottom d-flex justify-content-center"">
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item border bg-white text-center rounded-start">
                <a href="/kabinet" class="nav-link" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg></a>
                Boshiga
            </li>
            <li class="list-group-item border bg-white text-center">
                <a href="{{ route('zakazlar') }}" class="nav-link" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#table" />
                    </svg></a>
                Zakazlar
            </li>
            <li class="bg-white list-group-item border text-center">
                <a href="{{ route('mahsulot') }} " class="nav-link" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#grid" />
                    </svg></a>
                Mahsulot
            </li>
            <li class="bg-white list-group-item border rounded-end text-center">
                <a href="{{ route('trash') }}" class="nav-link" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#trash" />
                    </svg></a>
                Savat
            </li>
        </ul>
    </footer>
