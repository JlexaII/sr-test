@extends('auth.Layouts.app')

@section('title-block')
    Bozor
@endsection

@section('content')
    <div class="mt-2 p-2">
        <h2>Bozordagi tanlangan mahsulotlar</h2>
        <hr>
        <form action="{{ route('bozor') }}" method="post"></form>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mahsulot nomi</th>
                        <th scope="col">Rasmi</th>
                        <th scope="col">Narxi</th>
                        <th scope="col">Qisqacha m`lumot</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($bozor as $bozors) --}}
                    <tr>
                        <td>{{ $bozor->id + 1 }}</td>
                        <td>{{ $bozor->nameT }}</td>
                        <td>{{ $bozor->foto }}</td>
                        <td>{{ $bozor->sum }}</td>
                        <td>{{ $bozor->news }}</td>
                    </tr>
                    {{-- @endforeach --}}
                    </thead>
            </table>
        </div>
    </div>
@endsection
