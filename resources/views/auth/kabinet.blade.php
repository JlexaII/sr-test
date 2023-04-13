@extends('auth.Layouts.app')

@section('title-block')
    Bosh menyu
@endsection

@section('content')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <body>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check" viewBox="0 0 16 16">
                <title>Check</title>
                <path
                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </symbol>

            <symbol id="money" viewBox="0 0 20 20">
                <path
                    d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
            </symbol>
        </svg>

        <div class="container py-3">
            <header>
                <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
                        <img src="images/logo.png" alt="Silks Roads" width="25%">
                        <span class="fs-4">Tariflar rejasi</span>
                    </a>
                </div>

                <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                    <h1 class="display-4 fw-normal">Tarif</h1>
                    <p class="fs-5 text-muted">Barcha narxlar bozor talablariga asoslanadi. Narx bo'lmasa, bozor ham
                        bo'lmaydi. Shuning uchun, bizning xizmatimizda xizmat ko'rsatish faktini birinchi marta bepul deb
                        qabul qiling. Bepul bosqich tugagach, biznesingizga mos tarif paketini xarid qiling. Sizning
                        biznesingiz biz uchun muhim, ammo biz haq evaziga xizmatimizdagi savdo hajmini oshirishga tayyormiz.
                    </p>
                </div>
            </header>

            <main>
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Bepul</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#money" />
                                    </svg>0<small class="text-muted fw-light">/yil</small>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>100 Mahsulot qo'shing</li>
                                    <li>Reklama umumiy</li>
                                    <li>E-pochta aloqasi</li>
                                    <br><br><br>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary" disabled>Bepul</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3 text-bg-warning border-warning">
                                <h4 class="my-0 fw-normal">Savdogar</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#money" />
                                    </svg>250 000<small class="text-muted fw-light">/yil</small>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>101-500 Mahsulot qo'shing</li>
                                    <li>Reklama mahsus</li>
                                    <li>Tez-tez yangiliklar bilish</li>
                                    <li>Telefon orqali yordam</li>
                                    <br><br>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#oplata250Modal">Boshlash</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-success">
                            <div class="card-header py-3 text-bg-success border-success">
                                <h4 class="my-0 fw-normal">Korxona</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title">
                                    <svg class="bi" width="24" height="24">
                                        <use xlink:href="#money" />
                                    </svg>
                                    750 000<small class="text-muted fw-light">/yil</small>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>501-1000 mahsulot qo'shing</li>
                                    <li>Active reklama</li>
                                    <li>Tel. va @-pochta orqali yordam</li>
                                    <li>Yordam markaziga kirish</li>
                                    <br><br>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-success" data-bs-toggle="modal"
                                    data-bs-target="#oplata750Modal">Boshlash</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-bg-primary border-primary">
                                <h4 class="my-0 fw-normal">Katta Korxona</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title">
                                    <svg class="bi" width="24" height="24">
                                        <use xlink:href="#money" />
                                    </svg>
                                    900 000<small class="text-muted fw-light">/yil</small>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>1001-1500 mahsulot qo'shing</li>
                                    <li>Active reklama</li>
                                    <li>Tel. va @-pochta orqali yordam</li>
                                    <li>Yordam markaziga kirish</li>
                                    <li>Unikal sertifikat</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#oplata1200Modal">Biz bilan bog'lanish</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-secondary">
                            <div class="card-header py-3 text-bg-secondary border-secondary">
                                <h4 class="my-0 fw-normal">Korporaciya</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title">
                                    <svg class="bi" width="24" height="24">
                                        <use xlink:href="#money" />
                                    </svg>
                                    1 250 000<small class="text-muted fw-light">/yil</small>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>1501-2000 mahsulot qo'shing</li>
                                    <li>Active reklama</li>
                                    <li>Tel. va @-pochta orqali yordam</li>
                                    <li>Yordam markaziga kirish</li>
                                    <li>Unikal sertifikat</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#oplata1250Modal">Biz bilan bog'lanish</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-danger">
                            <div class="card-header py-3 text-bg-danger border-danger">
                                <h4 class="my-0 fw-normal">V.I.P.</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title">
                                    <svg class="bi" width="24" height="24">
                                        <use xlink:href="#money" />
                                    </svg>
                                    1 600 000<small class="text-muted fw-light">/yil</small>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Cheksiz mahsulot qo'shing</li>
                                    <li>Active reklama</li>
                                    <li>Tel. va @-pochta orqali yordam</li>
                                    <li>Yordam markaziga kirish</li>
                                    <li>Unikal sertifikat</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#oplata1600Modal">Biz bilan bog'lanish</button>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="display-6 text-center mb-4">Rejalarni solishtiring</h2>

                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th style="width: 34%;"></th>
                                <th style="width: 22%;">Bepul</th>
                                <th style="width: 22%;">Pro</th>
                                <th style="width: 22%;">Korxona</th>
                                <th style="width: 22%;">K.Korxona</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">Ommaviy</th>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Shaxsiy</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">Ruxsatlar</th>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Ulashish</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Cheksiz a'zolar</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Qo'shimcha xavfsizlik</th>
                                <td></td>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Sertifikat</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>

        </div>

    </body>

    <!-- Modal oplata 250 ming -->
    <div class="modal fade" id="oplata250Modal" tabindex="-1" aria-labelledby="oplataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-warning border-warning">
                    <h1 class="modal-title fs-5" id="oplata250ModalLabel">Savdogar tarifi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    1. Korxonalarga to`lov turi bank orqali pul o`tkazish bilan amalga oshadi.
                    <br>
                    <hr>
                    <br> Bank nomi: Ipoteka Bank
                    <br> MFO: 00364
                    <br> Xisob raqam: 20208000800925388001
                    <br> INN: 305763162

                    <br> To`lov xaqida ma`lumot: Biz www.silksroads.uz orqali sotib olish uchun "Tarif Savdogar" bir yilga
                    250 000 so'm o`tkazdik.
                    <p></p> <br> 2. Individual tadbirkorlaga "Uzum" mobil ilovasi orqali pul o'tkazish imkoni mavjud
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <!-- Modal oplata 750 ming -->
    <div class="modal fade" id="oplata750Modal" tabindex="-1" aria-labelledby="oplataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-success border-success">
                    <h1 class="modal-title fs-5" id="oplata750ModalLabel">Karxona tarifi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    1. Korxonalarga to`lov turi bank orqali pul o`tkazish bilan amalga oshadi.
                    <br>
                    <hr>
                    <br> Bank nomi: Ipoteka Bank
                    <br> MFO: 00364
                    <br> Xisob raqam: 20208000800925388001
                    <br> INN: 305763162

                    <br> To`lov xaqida ma`lumot: Biz www.silksroads.uz orqali sotib olish uchun "Tarif Korxona" bir yilga
                    750 000 so'm o`tkazdik.
                    <p></p> <br> 2. Individual tadbirkorlaga "Uzum" mobil ilovasi orqali pul o'tkazish imkoni mavjud
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- Modal oplata 900 ming -->
    <div class="modal fade" id="oplata1200Modal" tabindex="-1" aria-labelledby="oplataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-primary border-primary">
                    <h1 class="modal-title fs-5" id="oplata1200ModalLabel">Katta Karxona tarifi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    1. Korxonalarga to`lov turi bank orqali pul o`tkazish bilan amalga oshadi.
                    <br>
                    <hr>
                    <br> Bank nomi: Ipoteka Bank
                    <br> MFO: 00364
                    <br> Xisob raqam: 20208000800925388001
                    <br> INN: 305763162

                    <br> To`lov xaqida ma`lumot: Biz www.silksroads.uz orqali sotib olish uchun "Tarif Katta Karxona" bir yilga
                    900 000 so'm o`tkazdik.
                    <p></p> <br> 2. Individual tadbirkorlaga "Uzum" mobil ilovasi orqali pul o'tkazish imkoni mavjud
                </div>
                <div class="modal-footer">
                    <h4 class="text-primary">Bu plan bilan boshlash uchun Siz support@silksroads.uz xat jo'nating va biz Siz bilan bog'lanamiz.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal oplata 1 250 ming -->
    <div class="modal fade" id="oplata1250Modal" tabindex="-1" aria-labelledby="oplataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-secondary border-secondary">
                    <h1 class="modal-title fs-5" id="oplata1250ModalLabel">Korporaciya tarifi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    1. Korxonalarga to`lov turi bank orqali pul o`tkazish bilan amalga oshadi.
                    <br>
                    <hr>
                    <br> Bank nomi: Ipoteka Bank
                    <br> MFO: 00364
                    <br> Xisob raqam: 20208000800925388001
                    <br> INN: 305763162

                    <br> To`lov xaqida ma`lumot: Biz www.silksroads.uz orqali sotib olish uchun "Korporaciya Karxona" bir yilga
                    1 250 000 so'm o`tkazdik.
                    <p></p> <br> 2. Individual tadbirkorlaga "Uzum" mobil ilovasi orqali pul o'tkazish imkoni mavjud
                </div>
                <div class="modal-footer">
                    <h4 class="text-primary">Bu plan bilan boshlash uchun Siz support@silksroads.uz xat jo'nating va biz Siz bilan bog'lanamiz.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal oplata 1 600 ming -->
    <div class="modal fade" id="oplata1600Modal" tabindex="-1" aria-labelledby="oplataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-danger border-danger">
                    <h1 class="modal-title fs-5" id="oplata1600ModalLabel">V.I.P. tarifi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    1. Korxonalarga to`lov turi bank orqali pul o`tkazish bilan amalga oshadi.
                    <br>
                    <hr>
                    <br> Bank nomi: Ipoteka Bank
                    <br> MFO: 00364
                    <br> Xisob raqam: 20208000800925388001
                    <br> INN: 305763162

                    <br> To`lov xaqida ma`lumot: Biz www.silksroads.uz orqali sotib olish uchun "V.I.P. Karxona" bir yilga
                    1 600 000 so'm o`tkazdik.
                    <p></p> <br> 2. Individual tadbirkorlaga "Uzum" mobil ilovasi orqali pul o'tkazish imkoni mavjud
                </div>
                <div class="modal-footer">
                    <h4 class="text-primary">Bu plan bilan boshlash uchun Siz support@silksroads.uz xat jo'nating va biz Siz bilan bog'lanamiz.
                    </h4>
                </div>
            </div>
        </div>
    </div>

    </html>
@endsection
