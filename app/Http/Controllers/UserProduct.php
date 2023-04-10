<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;

class UserProduct extends Controller
{
    public function create() {
        $id = Auth::id();
        $product = Product::where('active', '1')->where('user_id', $id)->Paginate(15);
        return view('auth.inc.mahsulot', ['product' => $product]);
    }

    public function addproduct(ProductStoreRequest $product) {
        $data = $product->validated();
        $path = $product->file('image')->store('uploads', 'public');
        $data['image'] = $path;
        $product = Product::create($data);

        $id = Auth::id();
        $product = Product::where('active', '1')->where('user_id', $id)->paginate(4);
        return redirect()->route('mahsulot')->with('product', $product);
    }

    public function proddelete($id) {
        $product = Product::find($id);
        $product->active = '0';
        $product->save();

        return redirect()->route('mahsulot')->with('product', $product);
    }

    public function prodedit($id) {
        $product = new Product;
        return view('auth.inc.prodedit', ['data' => $product->find($id)]);
    }

    public function prodeditSave($id, HttpRequest $req) {   
        $product = Product::find($id);
        $product->soni = $req->input('soni');
        $product->price = $req->input('price');
        $product->old_price = $req->input('old_price');
        $product->save();
        
        $id = Auth::id();
        $product = Product::where('active', '1')->where('user_id', $id)->paginate(4);
        return redirect()->route('mahsulot')->with('product', $product);
    }

    public function prodreturn($id)
    {
        $product = Product::find($id);
        $product->active = '1';
        $product->save();

        return redirect()->route('trash')->with('product', $product);
    }

    public function trash(HttpRequest $product)
    {
        $id = Auth::id();
        $product = Product::where('active', '0')->where('user_id', $id)->paginate(4);
        return view('auth.inc.trash', ['product' => $product]);
    }

    public function search(HttpRequest $product)
    {
        $id = Auth::id();
        $s = $product->s;
        $product = Product::where('name', 'LIKE', "%{$s}%")->where('active', '1')->where('user_id', $id)->paginate(4);
        return view('auth.inc.mahsulot', ['product' => $product]);
    }

    public function searchTrash(HttpRequest $product)
    {
        $id = Auth::id();
        $s = $product->s;
        $product = Product::where('name', 'LIKE', "%{$s}%")->where('active', '0')->where('user_id', $id)->paginate(4);
        return view('auth.inc.trash', ['product' => $product]);
    }
}
