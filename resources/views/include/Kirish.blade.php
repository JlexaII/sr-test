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
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Kirish</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Ro'yxatdan o'tish</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pass-tab" data-bs-toggle="tab" data-bs-target="#pass-tab-pane"
                                type="button" role="tab" aria-controls="pass-tab-pane" aria-selected="false">Parol
                                tiklash</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- Kirish uchun shakl -->
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <i class="fa-solid fa-envelope"></i>
                                    <label for="InputEmail" class="form-label text-primary">E-pochta manzili</label>
                                    <input type="text" class="form-control" id="InputEmail" name="email"
                                        value="{{ old('email') }}" placeholder="@-pochtani kiriting">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @else
                                        <div id="emailHelp" class="form-text">E-pochtangizni hech kim bilan baham ko'rmaymiz.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <i class="fa-solid fa-lock"></i>
                                    <label for="InputPassword" class="form-label text-primary">Parol</label>
                                    <input type="password" class="form-control" id="InputPassword" name="password"
                                        placeholder="Minimum 8 simvol ">
                                    <a href="#" class="password-control"></a>
                                    @error('password')
                                        <p class="mt-2 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input text-primary" id="RegCheck"
                                        name="remember" required>
                                    <label class="form-check-label" for="RegCheck">Eslab qol</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirish</button>
                            </form>
                        </div>
                        <!-- Ro'yhattan o'tish uchun shakl -->
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <i class="fa-solid fa-envelope"></i>
                                    <label for="RegEmail" class="form-label text-primary">E-pochta manzili</label>
                                    <input type="text" class="form-control" id="RegEmail" name="email"
                                        value="{{ old('email') }}" aria-describedby="emailHelp"
                                        placeholder="@-pochtani kiriting">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @else
                                        <div id="emailHelp" class="form-text">E-pochtangizni hech kim bilan baham ko'rmaymiz.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <i class="fa-solid fa-lock"></i>
                                    <label for="RegPassword" class="form-label text-primary">Parol</label>
                                    <input type="password" class="form-control" id="RegPassword" name="password"
                                        autocomplete="on" placeholder="Minimum 8 simvol">
                                    <a href="#" class="password-control"></a>
                                    @error('password')
                                        <p class="mt-2 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Yuborish</button>
                            </form>
                        </div>
                        <!-- Parol tiklash -->
                        <div class="tab-pane fade" id="pass-tab-pane" role="tabpanel" aria-labelledby="pass-tab"
                            tabindex="0">
                            <form action="{{ route('password.request') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <i class="fa-solid fa-envelope"></i>
                                    <label for="email" class="form-label text-primary">E-pochta</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="@-pochtani kiriting">
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @else
                                    <div id="emailHelp" class="form-text">E-pochtangizni hech kim bilan baham ko'rmaymiz.
                                    </div>
                                @enderror
                                <button type="submit" class="btn btn-primary">Yuborish</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <ul class="nav col-md-4 tab-content list-unstyled d-flex">
                        <li>
                            Parolni eslab qoling
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
