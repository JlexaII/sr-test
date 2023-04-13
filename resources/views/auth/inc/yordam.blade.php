@extends('auth.Layouts.app')

@section('title-block')
    Yordam FAQ`s
@endsection

@section('content')
    <br>
    <h1 class="p-3 text-center border border-danger">Yordam FAQ's</h1>
    FAQdan boshqa savollarga telefon orqali javobini olsangiz bo`ladi yoki e-pochta <a
        href="mailto:support@silksroads.uz">support@silksroads.uz</a> jo`natib javob olishingiz mumkin.
    <br>
    <div class="border border-white">
        <p>
        <h3 class="text-success text-center">1. Tovar va mahsulotlarni qo`shish</h3>
        <ol class="text-white">
            <li>Tovar mahsulotlarni qo`shish uchun "Mahsulot" menyusiga o`tish lozim. U knopka chap tomonda joylashgan.
                <br>Keyin tepada o`ng tomondagi "+" tugmasini bosing va sizga modal menyu ochiladi.
                <br>
            <li>O`sha menyuda mahsulot "Nomi"ni kiriting.</li>
            <li>Mahsulot "Soni"ni kiriting</li>
            <li>Xozirgi paytdagi "Narxi"</li>
            <li>"Artikul" kiriting bu raqam unikal bo'ladi</li>
            <li>"Turkum"ni tanlang</li>
            <li>"Brend"ni tanlang</li>
            <li>"Rasm"ni tanlang va keyingi "Saqlash" tugmasini bosing</li>
            </li>
        </ol>
        <h3 class="text-success text-center">2. Tovar va mahsulotlar savatda</h3>
        <ol class="text-white">
            <li>Tovar mahsulotlarni o`chirilganda "Savat" menyusiga tushadi.
                <br>Siz u tovar va mahsulotlarni qaytarishingiz mumkin.
                <br>
            <li>Qaytarish uchun o`ng tomondagi tugmani bosib qaytarasiz</li>
            </li>
        </ol>
        <h3 class="text-success text-center">3. Tovar va mahsulotlarni o`zgartirish uchun</h3>
        <ol class="text-white">
            <li>Tovar mahsulotlarni o`zgartirish uchun Siz o`ng tomondagi oxiridan 2chi tugmani bosing.
                <br>Tog`ridagi mahsulotga o`zgartirish kiritolasiz.
                <br>
            <li>Soni va Narxini o`zgartirish kiritsangiz bo'ladi</li>
            <li>Xoxlasangiz oldingi narxni eski narx qib kiritsangiz bo`ladi</li>
            </li>
        </ol>
        <h3 class="text-success text-center">4. Menyu qismiga kirish</h3>
        <ol class="text-white">
            <li>Menyuni ochsaniz sizga 2ta menyu taklif qilinadi.
                <br>Sozlama va Profil.
                <br>
            <li>"Sozlama"da xoxlagan funkciyani yoqing va internet do`koniyzga taysir qiladi</li>
            <li>"Profil" menyuda sizga tegishli ma`lumotlarni kiritasiz</li>
            <li>Avatar tanlang kerak bo`lsa.</li>
            <li>Kompaniyangizni yoki Ism Sharifingizni kiritasiz.</li>
            <li>Adres kiritasiz</li>
            <li>Telefon raqamingizni (mobil raqam kere)</li>
            <li>Bank nomi, xisob raqam va MFO kiritasiz</li>
            <li>Identifikaciya raqamingizni kiriting</li>
            <li>Social akkauntingizni vergul bilan bo`lib kiriting</li>
            </li>
        </ol>
        </p>
        Qolgan tugmalar Sizga tushunarli bo`lsa kerak deb oylaymiz.
    </div>
    <br>
@endsection
