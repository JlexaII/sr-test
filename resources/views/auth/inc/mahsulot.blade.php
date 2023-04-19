@extends('auth.Layouts.app')

@section('title-block')
    Mahsulot
@endsection

@section('content')
    <!-- Bosh sahifa kodi -->
    <div class="container">
        <main class="flex-shrink-0">
            <h1 class="mt-1">Mahsulotlar ro`yhati
                <a href="javascript:void(0)" class="btn btn-primary" style="float: right;" data-bs-toggle="modal"
                    data-bs-target="#add-product-modal" title="Mahsulot qo`shish">
                    @error('image')
                        <span class="text-warning">Rasm 128Kb katta. Qaytadtan tanlang rasm</span>
                    @enderror
                    <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                <!-- Izlash uchun -->
                <div class="input-group">
                    <div class="form-outline">
                        <form action="{{ route('search') }}" method="get">
                            <input type="text" id="s" name="s" class="form-control outline-none"
                                placeholder="Nomi bilan izlash" />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                    </form>
                </div>
            </h1>

            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="projects-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nomi</th>
                            <th scope="col">Soni</th>
                            <th scope="col">Narxi</th>
                            <th scope="col">Eski narx</th>
                            <th scope="col">Artikul</th>
                            <th scope="col">Turkum</th>
                            <th scope="col">Brend</th>
                            <th scope="col">Rasmi</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Del</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $project)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ Str::limit($project->name, 12) }}</td>
                                <td>{{ $project->soni }}</td>
                                <td>{{ $project->price }}</td>
                                <td>{{ $project->old_price }}</td>
                                <td>{{ Str::limit($project->artikul, 5) }}</td>
                                <td title="{{ $project->category_id }}">{{ Str::limit($project->category_id, 4) }}</td>
                                <td title="{{ $project->brand_id }}">{{ Str::limit($project->brand_id, 4) }}</td>
                                <td><img src="{{ asset('/storage/' . $project->image) }}" class="img-thumbnail zoom">
                                </td>
                                <td>
                                    <a href="{{ route('edit', $project->id) }}" class="btn btn-success btn-sm"
                                        style="float: right;"><i class="fa fa-edit" title="Ozgartirish"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('proddelete', $project->id) }}" method="post">
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
            </div>
            <div>
                <span class="text-white bg-warning p-2">Tarif boyicha Ball: {{ auth()->user()->tarif }} Ishlatingiz:
                    {{ $product->total() }}
                    Qoldiq: {{ intval(auth()->user()->tarif) - intval($product->total()) }} </span>
            </div>
            {{ $product->onEachSide(0)->links() }}
        </main>
    </div>

    <!-- Modal CREATE -->
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

                        <div class="mb-3 border border-dark">
                            <input type="text" class="form-control" id="name" placeholder="mahsulot nomi"
                                name="name" value="{{ old('name') }}" required autofocus
                                class="{{ $errors->has('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="name" class="form-label text-success">Mahsulot nomi</label>
                            @enderror
                        </div>

                        <div class="mb-3 border border-dark">
                            <input type="text" value="{{ old('soni') }}" required autofocus
                                class="form-control {{ $errors->has('soni') }}" id="soni" placeholder="mahsulot soni"
                                name="soni">
                            @error('soni')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="soni" class="form-label text-success">Soni</label>
                            @enderror
                        </div>

                        <div class="mb-3 border border-dark">
                            <input type="text" value="{{ old('price') }}" required autofocus
                                class="form-control {{ $errors->has('price') }}" id="price" placeholder="Narxi"
                                name="price">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="price" class="form-label text-success">Narxi</label>
                            @enderror
                        </div>

                        <div class="mb-3 border border-dark">
                            <input type="text" value="{{ old('artikul') }}" required autofocus
                                class="form-control {{ $errors->has('artikul') }}" id="artikul"
                                placeholder="Unikal raqam" name="artikul">
                            @error('artikul')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="artikul" class="form-label text-success">Artikul</label>
                            @enderror
                        </div>

                        <input type="hidden" value="0" name="brand_id">




                        <div class="form-floating">
                            <select class="form-select" id="float" name="category_id">
                                <option selected disabled class="text-primary">Kategoriyalar</option>
                                @foreach ($category_0 as $item)
                                    <option disabled class="text-success">{{ $item->name }}</option>
                                    <optgroup>
                                        @foreach ($children->where('parent_id', $item->id) as $second)
                                            <option>{{ $second->name }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="float">Bu erda Kategoriya tanlang</label>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" value="{{ old('brand_id') }}" required autofocus class="form-control"
                                id="brand_id" placeholder="Unikal raqam" name="brand_id">
                            @error('brand_id')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="brand_id" class="form-label text-success">Brend</label>
                            @enderror
                        </div> --}}

                        <div class="mb-3 border border-dark">
                            <input type="file" required class="form-control" id="rasm" placeholder="Rasm"
                                name="image">
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @else
                                <label for="image" class="form-label text-success">Rasm</label>
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
