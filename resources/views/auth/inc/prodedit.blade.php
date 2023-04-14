@extends('auth.Layouts.app')

@section('title-block')
    {{ $data->name }}
@endsection

@section('content')
    <!-- Begin page content -->
    <div class="border mt-2">
        <main class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-1">{{ $data->name }} o`zgartirish</h1>

                <table class="table" id="projects-table">
                    <thead>
                        <tr>
                            <th scope="col">Mahsulot Nomi</th>
                            <th scope="col">Soni</th>
                            <th scope="col">Narxi</th>
                            <th scope="col">Eski narx</th>
                            <th scope="col">Sahla</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <form action="{{ route('prodeditSave', $data->id) }}" method="post">
                                @csrf
                                <td>{{ Str::limit($data->name, 15) }}</td>
                                <td><input type="text" value="{{ $data->soni }}" name="soni" id="soni"></td>
                                <td><input type="text" value="{{ $data->price }}" name="price" id="price"></td>
                                <td><input type="text" value="{{ $data->old_price }}" name="old_price" id="old_price">
                                </td>
                                <td>

                                    <button class="btn btn-success btn-sm" style="float: center;" data-bs-toggle="modal"
                                        data-bs-target="#add-product-edit-modal"><i class="fa fa-download"></i></button>
                            </form>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <script>
                function digits_float(target) {
                    val = $(target).val().replace(/[^0-9.]/g, '');
                    if (val.indexOf(".") != '-1') {
                        val = val.substring(0, val.indexOf(".") + 3);
                    }
                    val = val.replace(/\B(?=(\d{3})+(?!\d))/g, '');
                    $(target).val(val);
                }

                $(function($) {
                    $('body').on('input', '#price', function(e) {
                        digits_float(this);
                    });
                    digits_float('#price');
                });
            </script>
        </main>
    </div>
@endsection
