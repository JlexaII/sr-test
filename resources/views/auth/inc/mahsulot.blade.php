@extends('auth.Layouts.app')

@section('title-block')
    Mahsulot
@endsection

@section('content')
    <!-- Begin page content -->
    <div class="border mt-2">
        <main class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-1">Mahsulotlar ro`yhati<a href="javascript:void(0)" class="btn btn-primary"
                        style="float: right;" data-bs-toggle="modal" data-bs-target="#add-product-modal">Mahsulot qo`shish</a>
                </h1>
                <!-- Izlash uchun -->
                <div class="input-group">
                    <div class="form-outline">
                        <form action="{{ route('search') }}" method="get">
                            <input type="text" id="s" name="s" class="form-control"
                                placeholder="Nomi bilan izlash" />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                    </form>
                </div>

                <table class="table" id="projects-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mahsulot Nomi</th>
                            <th scope="col">Soni</th>
                            <th scope="col">Narxi</th>
                            <th scope="col">Eski narx</th>
                            <th scope="col">Artikul</th>
                            <th scope="col">Turkum</th>
                            <th scope="col">Brend</th>
                            <th scope="col">Rasmi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $project)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ Str::limit($project->name, 15) }}</td>
                                <td>{{ $project->soni }}</td>
                                <td>{{ $project->price }}</td>
                                <td>{{ $project->old_price }}</td>
                                <td>{{ $project->artikul }}</td>
                                <td>{{ $project->category_id }}</td>
                                <td>{{ $project->brand_id }}</td>
                                <td><img src="{{ asset('/storage/' . $project->image) }}" class="img-thumbnail zoom"></td>
                                <td>

                                    <a href="{{ route('edit', $project->id) }}" class="btn btn-success btn-sm"
                                        style="float: right;"><i class="fa fa-edit"></i></a>

                                </td>
                                <td>
                                    <form action="{{ route('proddelete', $project->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger btn-sm" style="float: right;"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $product->links() }}
            </div>

            <style>
                .zoom {
                    background-color: green;
                    transition: transform .2s;
                    /* Animation */
                    width: 30px;
                    height: 30px;
                }

                .zoom:hover {
                    transform: scale(5);
                    /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                }
            </style>
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

        <!-- The Modal CREATE -->
        <div class="modal" id="add-product-modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Mahsulot qo`shish</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('mahsulot') }}" method="POST" class="needs-validation" novalidate
                        enctype="multipart/form-data">
                        <!-- Modal body -->
                        <div class="modal-body">
                            @csrf

                            <input type="hidden" value="{{ auth()->user()->id }} " name="user_id">
                            <input type="hidden" value="1" name="active">
                            <input type="hidden" value="0" name="hit">

                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="mahsulot nomi"
                                    name="name" value="{{ old('name') }}" required autofocus
                                    class="{{ $errors->has('name') }}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @else
                                    <label for="name" class="form-label text-success">Mahsulot nomi</label>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="text" required autofocus class="form-control {{ $errors->has('soni') }}"
                                    id="soni" placeholder="mahsulot soni" name="soni">
                                @error('soni')
                                    <p class="text-danger">{{ $message }}</p>
                                @else
                                    <label for="soni" class="form-label text-success">Soni</label>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="text" required autofocus class="form-control {{ $errors->has('price') }}"
                                    id="price" placeholder="Narxi" name="price">
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @else
                                    <label for="price" class="form-label text-success">Narxi</label>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="text" required autofocus class="form-control {{ $errors->has('artikul') }}"
                                    id="artikul" placeholder="Unikal raqam" name="artikul">
                                @error('artikul')
                                    <p class="text-danger">{{ $message }}</p>
                                @else
                                    <label for="artikul" class="form-label text-success">Artikul</label>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="text" required autofocus class="form-control" id="category_id"
                                    placeholder="Unikal raqam" name="category_id">
                                @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @else
                                    <label for="category_id" class="form-label text-success">Turkum</label>
                                @enderror
                            </div>

                            <div class="mb-3">

                                <input type="text" required autofocus class="form-control" id="brand_id"
                                    placeholder="Unikal raqam" name="brand_id">
                                @error('brand_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @else
                                    <label for="brand_id" class="form-label text-success">Brend</label>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="file" required class="form-control" id="rasm" placeholder="Rasm"
                                    name="image">
                                <label for="rasm" class="form-label text-success">Rasm tanlang</label>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Saqlash</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Chiqish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
