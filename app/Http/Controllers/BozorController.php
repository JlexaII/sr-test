<?php

namespace App\Http\Controllers;

use App\Models\Bozor;
use Illuminate\Http\Request;

class BozorController extends Controller
{
    public function index() {
        $bozor = new Bozor();
        return view('auth.inc.bozor', ['bozor' => $bozor]);
    }
}
