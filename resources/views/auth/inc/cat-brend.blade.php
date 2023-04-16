@extends('auth.Layouts.app')

@section('title-block')
    Kategoriya va Brend
@endsection

@section('content')
    <div class="container row">
        <div class="col-8 p-2">
            <div class="btn-group" role="group">
                <button href="#" type="button" class="btn btn-danger" id="verify">Hammasi</button>
                <a href="{{ route('category') }}" type="button" class="btn btn-warning" id="Category">Kategoriya</a>
                <a href="{{ route('brand') }}" type="button" class="btn btn-success" id="Brand">Brend</a>
            </div>
        </div>
        <br>
            <h5>Asosiy m`lumot bazasiga tegishli guruhlar bu "Kategoriya" va "Brend".</h5>
        <div class="d-flex">
            <div class="border border-black">
                <h5 class="text-center">Kategoriya</h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Turkum</th>
                            <th scope="col">Shajara</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_1 as $item)
                        <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->parent_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="border border-black">
                <h5 class="text-center">Brend</h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brend nomi</th>
                            <th scope="col">Rasmi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_2 as $item)
                        <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset('/storage/' . $item->image) }}" class="img-thumbnail zoom"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <p></p>
    </div>
@endsection
