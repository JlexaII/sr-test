@extends('Layouts.app')

@section('title-block')
    Marketplace Silks Roads
@endsection

@section('content')
    <div class="p-5 mt-5 d-flex">
        @foreach ($user as $user)
            @foreach ($profil->where('id', $user->id) as $key)
                <div class="card mt-2" style="width: 12rem;">
                    <img src="{{ $user->id . $user->photo_extension }}" class="card-img-top" alt="Logotip">
                    <div class="card-body">
                        <h5 class="card-title">{{ $key->cname }}</h5>
                        <p class="card-text">{{ $key->telefon }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        @if ($key->active == 0)
                            <li class="list-group-item text-danger">Do'kon yopiq</li>
                        @else
                            <li class="list-group-item">Do`kon ochiq</li>
                        @endif

                        <li class="list-group-item">Ikkinchi element</li>
                        <li class="list-group-item">Uchinchi element</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">kartaga ssilka</a>
                        <a href="#" class="card-link">Do'konga kirish</a>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
@endsection
