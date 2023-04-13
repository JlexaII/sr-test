<?php

namespace App\Http\Controllers;

use App\Models\Bozor;
use Illuminate\Http\Request;

class BozorController extends Controller
{
    public function index() {
        $bozor = new Bozor();
        $bozor = Bozor::where('active', 1)->paginate(25);
        return view('auth.inc.bozor', ['bozor' => $bozor]);
    }
}
