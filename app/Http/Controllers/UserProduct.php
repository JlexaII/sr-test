<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductAddproductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class UserProduct extends Controller
{
    public function create()
    {
        $id = Auth::id();       
        $product = Product::where('active', '1')->where('user_id', $id)->paginate(4);
        return view('auth.inc.mahsulot', ['product' => $product]);
    }

    public function addproduct(ProductAddproductRequest $product)
    {
        $data = $product();
        $path = $product->file('image')->store('uploads', 'public');
        $data['image'] = $path;
        $product = Product::create($data);

        $id = Auth::id();
        $product = Product::where('active', '1')->where('user_id', $id)->paginate(4);        
        return redirect()->route('mahsulot')->with('product', $product);
    }

    public function proddelete($id)
    {
        $product = Product::find($id);
        $product->active = '0';
        $product->save();

        return redirect()->route('mahsulot')->with('product', $product);
    }

    public function trash(Request $product)
    {
        $id = Auth::id();
        $product = Product::where('active', '0')->where('user_id', $id)->paginate(4);
        return view('auth.inc.trash', ['product' => $product]);
    }

    public function search(Request $req) {
        $id = Auth::id();
        $s = $req->s;
        $product = Product::where('name', 'LIKE', "%{$s}%")->where('active', '1')->where('user_id', $id)->paginate(4);
        return view('auth.inc.mahsulot', ['product' => $product]);
    }
}
