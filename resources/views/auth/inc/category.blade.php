@extends('auth.Layouts.app')

@section('title-block')
    Kategoriya
@endsection

@section('content')
    <div class="col-8 p-2">
        <div class="btn-group" role="group">
            <a href="{{ url('cat-brend') }}" type="button" class="btn btn-danger" id="verify">Hammasi</a>
            <button type="button" class="btn btn-warning" id="Category">Kategoriya</button>
            <a href="{{ route('brand') }}" type="button" class="btn btn-success" id="Brand">Brend</a>
            <a href="javascript:void(0)" class="btn btn-primary active" style="float: right;" data-bs-toggle="modal"
                data-bs-target="#add-product-modal" title="Qo`shish">
                <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
        </div>
    </div>

    <br>
    <h5>Kategoriya kiritish</h5>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Turkum</th>
                <th scope="col">Shajara</th>
                <th scope="col">Qisqa ma`lumot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_cat as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <td>{{ Str::limit($item->name, 12) }}</td>
                    <td>{{ $item->parent_id }}</td>
                    <td>{{ Str::limit($item->content, 15) }}</td>
                    <td>
                        <form action="{{ route('delete_cat', $item->id) }}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-sm" style="float: right;" title="O`chirish"><i
                                    class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data_cat->onEachSide(0)->links() }}

    <!-- Modal oyna kategoriya qo'shish -->
    <div class="modal" id="add-product-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">kategoriya qo`shish</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('category') }}" method="POST" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control border border-primary {{ $errors->has('name') }}"
                                id="name" placeholder="Kategoriya nomi" name="name" value="{{ old('name') }}"
                                required autofocus>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="name" class="form-label text-success">Kategoriya nomi</label>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="number" value="{{ old('parent_id') }}" required autofocus
                                class="form-control {{ $errors->has('parent_id') }} border border-primary" id="parent_id"
                                placeholder="Shajarani raqami" name="parent_id">
                            @error('parent_id')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="parent_id" class="form-label text-success">Shajarani raqami</label>
                            @enderror
                        </div>

                        <div class="mb-3 border border-black">
                            <input type="text" value="{{ old('content') }}" required autofocus
                                class="form-control {{ $errors->has('content') }} border border-primary" id="content"
                                placeholder="Qisqa ma`lumot" name="content">
                            @error('content')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="content" class="form-label text-success">Qisqa ma`lumot</label>
                            @enderror
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
@endsection
