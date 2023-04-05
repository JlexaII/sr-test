@extends('auth.Layouts.app')

@section('title-block')
    Savatcha
@endsection

@section('content')
    <!-- Begin page content -->
    <div class="border mt-2">
        <main class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-1">SAVAT
                </h1> 

                <!-- Izlash uchun -->
                <div class="input-group">
                    <div class="form-outline">
                        <form action="{{ route('searchTrash') }}" method="get">
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
                            <th scope="col">Qaytarish</th>                            
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
                                <td>
                                    <form action="{{ route('prodreturn', $project->id) }}" method="post"> 
                                        @csrf
                                    <button class="btn btn-success btn-sm" style="float: center;" data-bs-toggle="modal"
                                        data-bs-target="#add-product-edit-modal"><i class="fa fa-arrow-right"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $product->links() }}
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
