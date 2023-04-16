@extends('auth.Layouts.app')

@section('title-block')
    Kategoriya va Brend
@endsection

@section('content')
    <div class="col-8 p-2">
        <div class="btn-group" role="group">
            <a href="{{ url('cat-brend') }}" type="button" class="btn btn-danger" id="verify">Hammasi</a>
            <a href="{{ route('category') }}" type="button" class="btn btn-warning" id="Category">Kategoriya</a>
            <button type="button" class="btn btn-success" id="Brand">Brend</button>
            <a href="javascript:void(0)" class="btn btn-primary active" style="float: right;" data-bs-toggle="modal"
                data-bs-target="#add-product-modal" title="Qo`shish">
                <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <h5>Brand kiritish kere</h5>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brend nomi</th>
                <th scope="col">Rasmi</th>
                <th scope="col">Qisqa ma`lumot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_brand as $item)
                <tr>
                    <th>{{ $loop->index + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ asset('/storage/' . $item->image) }}" class="img-thumbnail zoom"></td>
                    <td>{{ $item->content }}</td>
                    <td>
                        <form action="{{ route('delete_brand', $item->id) }}" method="post">
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
    {{ $data_brand->onEachSide(0)->links() }}

    <!-- Modal oyna brand qo'shish -->
    <div class="modal" id="add-product-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Brand qo`shish</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('brand') }}" method="POST" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control border border-primary {{ $errors->has('name') }}"
                                id="name" placeholder="Brend nomi" name="name" value="{{ old('name') }}" required
                                autofocus>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="name" class="form-label text-success">Brend nomi</label>
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

                        <div class="mb-3">
                            <input type="file" required class="form-control" id="rasm" placeholder="Rasm"
                                name="image">
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="image" class="form-label text-success">Brend rasimi</label>
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
