<div class="container">
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Mahsulotlar katalogi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="dropdown">
                @foreach ($data_cat as $item)
                    <button
                        class="btn btn-light dropdown-toggle d-flex align-items-start fw-bold"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa {{ $item->content }}" aria-hidden="true"></i> {{ $item->name }}
                        <span class="badge bg-info rounded-pill">
                            {{ $childs->where('parent_id', $item->id)->count() }}
                        </span>
                    </button>
                    <ul class="dropdown-menu list-counter-square">
                        @foreach ($childs->where('parent_id', $item->id) as $sec)
                            <li><a href="#">{{ $sec->name }}</a></li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>
