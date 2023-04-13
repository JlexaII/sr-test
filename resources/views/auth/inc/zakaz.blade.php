@extends('auth.Layouts.app')

@section('title-block')
    Zakazlar
@endsection

@section('content')
    <div class="mt-2 p-2">
        <h2>Zakaz qilingan mahsulotlar</h2>
        <hr>
        <form action="{{ route('zakazlar') }}" method="get">
            @csrf
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mahsulot nomi</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Narxi</th>
                            <th scope="col">Miqdori</th>
                            <th scope="col">Qisqacha m`lumot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($zakaz as $zakazs)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $zakazs->name }}</td>
                            <td>{{ $zakazs->phone }}</td>
                            <td>{{ $zakazs->sum }}</td>
                            <td>{{ $zakazs->amount }}</td>
                            <td>{{ $zakazs->text }}</td>
                        </tr>
                        @endforeach
                        </thead>
                </table>
            </div>
        </form>
    </div>
@endsection
