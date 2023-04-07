@extends('auth.Layouts.app')

@section('title-block')
    Sozlama
@endsection

@section('content')
    <div class="row">
        <div class="col-8 mt-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="ch1">            
                <label class="form-check-label" for="flexSwitchCheckDefault">Orqa fonni qora yoki oq qilish</label>                
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="ch2" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Reklama</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="ch3">
                <label class="form-check-label" for="flexSwitchCheckDefault">E`lonlar</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="ch4">
                <label class="form-check-label" for="flexSwitchCheckChecked">Do`kon</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="ch5">
                <label class="form-check-label" for="flexSwitchCheckDefault">Bozor narxlari</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="ch6">
                <label class="form-check-label" for="flexSwitchCheckChecked">Ob-havo</label>
            </div>
        </div>
    </div>
@endsection
