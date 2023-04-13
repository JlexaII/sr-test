@extends('auth.Layouts.app')

@section('title-block')
    Tarif tugadi
@endsection

@section('content')
<br>
<div class="container text-center border border-warning">
    <h4>
        Sizda tarif bo'ycha "{{ auth()->user()->tarif }}"dan ortiq mahsulot qoshish imkoni qolmadi.
        <br>Agar Siz mahsulot qoshishni davom qilmoqchi bo'lsangiz Iltomos <a href="{{ route('kabinet') }}" __targe>Tarif</a> rajalariga o'ting
        <br>va o'zingizga mos keladigan tarifni tanlang.
        <br>Xarmat bilan Silks Roads komandasi.
    </h4>
</div>
@endsection
