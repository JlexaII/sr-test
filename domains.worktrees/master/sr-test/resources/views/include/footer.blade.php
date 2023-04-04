@section('footer')

  <!-- Footer ko'zi-->
  <div class="container-xxl d-md-block bg-light text-center fixed-bottom">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <img src="images/logo_Axmed.png" alt="Axmedov's logotip" width="40px">
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Ltd. Guvohnoma № 637736</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#telegram"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#instagram"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#facebook"></use>
            </svg></a></li>
      </ul>
    </footer>
  </div>
 
  <!-- Menyu telefonlari uchun-->
  <footer class="container-fluid d-md-none d-md-block bg-light text-center fixed-bottom">
    <div class="btn-group me-2" role="group" aria-label="Basic example">
      <button type="button" class="btn" onclick="isAsosiy()"><i class="fa-solid fa-house fa-3x"></i>
        <h6 class="text center">Asosiy</h6>
      </button>
      <button type="button" class="btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
          class="fa fa-bars fa-3x"></i>
        <h6 class="text center">Turkum</h6>
      </button>
      <button type="button" class="btn border border-primary rounded-circle" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        <h1 class="text center"
          style="font-size: 50px; font-family: 'Times New Roman', Times, serif; color: chocolate;">SR</h1>
      </button>
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#SBasket"><i class="fa-solid fa-cart-shopping fa-3x"></i>
        <h6 class="text center basket">Savat</h6>
      </button>
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ModalK"><i class="fa-solid fa-user fa-3x"></i>
        <h6 class="text center">Profil</h6>
      </button>
    </div>
  </footer>