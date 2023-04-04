@section('login')
    
<!-- Modal Sistemaga kirish-->
<div class="modal fade" id="ModalK" tabindex="-1" aria-labelledby="KModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="KModalLabel">Administrator qismi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
              role="tab" aria-controls="home-tab-pane" aria-selected="true">Kirish</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
              role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ro'yxatdan o'tish</button>
          </li>          
        </ul>
        <div class="tab-content" id="myTabContent">
          <!-- Kirish uchun shakl -->
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="mb-3">
                <i class="fa-solid fa-envelope"></i>
                <label for="InputEmail" class="form-label">E-pochta manzili</label>
                <input type="text" class="form-control" id="InputEmail" name="InputEmail">
                <div id="emailHelp" class="form-text">E-pochtangizni hech kim bilan baham ko'rmaymiz.</div>
              </div>
              <div class="mb-3">
                <i class="fa-solid fa-lock"></i>
                <label for="InputPassword" class="form-label">Parol</label>
                <input type="password" class="form-control" id="InputPassword" name="InputPassword">
                <a href="#" class="password-control"></a>
              </div>
              <button type="submit" class="btn btn-primary">Kirish</button>
            </form>
          </div>
          <!-- Ro'yhattan o'tish uchun shakl -->
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <form action="{{ route('register') }}" method="post">
              @csrf
              <div class="mb-3">
                <i class="fa-solid fa-envelope"></i>
                <label for="RegEmail" class="form-label">E-pochta manzili</label>                
                <input type="text" class="form-control" id="RegEmail" name="RegEmail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">E-pochtangizni hech kim bilan baham ko'rmaymiz.</div>
              </div>              
              <div class="mb-3">
                <i class="fa-solid fa-lock"></i>
                <label for="RegPassword" class="form-label">Parol</label>                
                <input type="password" class="form-control" id="RegPassword" name="RegPassword" autocomplete="on">
                <a href="#" class="password-control"></a>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="RegCheck">
                <label class="form-check-label" for="RegCheck"><a href="#">Ushbu</a> shartlarni qabul qilaman</label>
              </div>
              <button type="submit" class="btn btn-primary">Yuborish</button>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <ul class="nav col-md-4 tab-content list-unstyled d-flex">
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
      </div>
    </div>
  </div>
</div>