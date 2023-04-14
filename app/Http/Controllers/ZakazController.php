<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Zakaz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZakazController extends Controller
{
    public function index() {
        $id = Auth::id();
        $zakaz = new Zakaz();
        $zakaz = Zakaz::where('user_id', $id)->paginate(25);
        return view('auth.inc.zakaz', ['zakaz' =>$zakaz]);
    }

    public function category() {
        $category = new Category();
    }

    public function brand() {
        $brend = new Brand();
    }
}
