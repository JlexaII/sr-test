@extends('auth.Layouts.app')

@section('title-block')
    Bozor
@endsection

@section('content')
    <div class="mt-2 p-2">
        <h2>Bozordagi tanlangan mahsulotlar</h2>
        <hr>
        <form action="{{ route('bozor') }}" method="get">
            @csrf
            <div class="table-responsive">
                <table class="table table-bordered">
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
                        @foreach ($bozor as $bozors)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $bozors->nameT }}</td>
                            <td>{{ $bozors->foto }}</td>
                            <td>{{ $bozors->sum }}</td>
                            <td>{{ $bozors->news }}</td>
                        </tr>
                        @endforeach
                        </thead>
                </table>
            </div>
        </form>
    </div>
@endsection
