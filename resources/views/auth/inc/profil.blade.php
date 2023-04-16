@extends('auth.Layouts.app')

@section('title-block')
    {{ $profile->cname }}
@endsection

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="cname" viewBox="0 0 16 16">
            <path
                d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z" />
            <path
                d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z" />
        </symbol>

        <symbol id="adress" viewBox="0 0 16 16">
            <path
                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
            <path
                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
        </symbol>

        <symbol id="bank" viewBox="0 0 16 16">
            <path
                d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
        </symbol>

        <symbol id="social" viewBox="0 0 16 16">
            <path d="M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982Z" />
            <path
                d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5Zm0 1H7.5v3h-6l2.25-3ZM8.5 4V1h3.75l2.25 3h-6ZM15 5v10H1V5h14Z" />
        </symbol>

        <symbol id="UA" viewBox="0 0 16 16">
            <path
                d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9V5.5Z" />
        </symbol>
        <symbol id="tel" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
        </symbol>
        <symbol id="env" viewBox="0 0 16 16">
            <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
        </symbol>

        <symbol id="save" viewBox="0 0 16 16">
            <path
                d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2Zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672Z" />
            <path
                d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5Z" />
        </symbol>

        <symbol id="camera" viewBox="0 0 16 16">
            <path
                d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
            <path
                d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
        </symbol>

    </svg>
    <div class="container">
        <div class="row">
            <div class="p-2 mt-2 col-2">
                <h5>Profil qismi</h5>
            </div>
            <div class="col-4 p-3">
                <img src="{{ auth()->user()->getAvatarUrl() }}" id="avatarImage" width="30%">
            </div>

            <div class="col-8 p-2 mt-2 text-center border border-warning">
                <form action="{{ route('profileSave', $profile->id) }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <svg class="bi mt-2" width="24" height="24">
                            <use xlink:href="#cname" />
                        </svg>
                        <input type="text" class="form-control" placeholder="Kompaniya nomi"
                            value="{{ $profile->cname }}" name="cname">
                    </div>

                    <div class="input-group mb-3">
                        <svg class="bi mt-2" width="24" height="24">
                            <use xlink:href="#adress" />
                        </svg>
                        <input type="text" class="form-control" placeholder="Tashkilotni adressi"
                            value="{{ $profile->adress }}" name="adress">
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <svg class="bi mt-2" width="24" height="24">
                                <use xlink:href="#tel" />
                            </svg>
                            <span class="input-group-text">+</span>
                            <input type="text" class="form-control" placeholder="Telefon raqami"
                                value="{{ $profile->telefon }}" name="telefon">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <svg class="bi mt-2" width="24" height="24">
                                <use xlink:href="#env" />
                            </svg>
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" disabled value="{{ request()->user()->email }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <svg class="bi mt-2" width="24" height="24">
                                <use xlink:href="#bank" />
                            </svg>
                            <input type="text" class="form-control" placeholder="Bank nomi" value="{{ $profile->bank }}"
                                name="bank">
                            <input type="text" class="form-control" placeholder="Xisob raqam"
                                value="{{ $profile->account }}" name="account">
                            <input type="text" class="form-control" placeholder="MFO" value="{{ $profile->mfo }}"
                                name="mfo">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <svg class="bi mt-2" width="24" height="24">
                                <use xlink:href="#UA" />
                            </svg>
                            <input type="text" class="form-control" placeholder="INN" value="{{ $profile->inn }}"
                                name="inn">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <svg class="bi mt-2" width="24" height="24">
                                <use xlink:href="#social" />
                            </svg>
                            <input type="text" class="form-control" placeholder="Ijtimoiy tarmoqlar"
                                value="{{ $profile->social }}" name="social">
                        </div>
                    </div>

                    <div class="input-group">
                        <button type="submit" class="bi btn btn-success"><svg class="bi mt-2" width="24"
                                height="24">
                                <use xlink:href="#save" />
                            </svg> Saqlab qo`yish</button>
                    </div>
                </form>
            </div>
            <br>
            <p></p>
        </div>
    </div>
@endsection
