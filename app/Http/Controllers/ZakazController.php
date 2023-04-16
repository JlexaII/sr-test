<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use App\Models\Zakaz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZakazController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $zakaz = new Zakaz();
        $zakaz = Zakaz::where('user_id', $id)->paginate(25);
        return view('auth.inc.zakaz', ['zakaz' => $zakaz]);
    }

    public function category()
    {
        $category = Category::paginate(15);
        return view('auth.inc.category', ['data_cat' => $category]);
    }

    public function store(Request $category)
    {
        $cat = new Category();
        $cat->name = $category->input('name');
        $cat->parent_id = $category->input('parent_id');
        $cat->content = $category->input('content');
        $cat->save();
        $category = Category::paginate(25);
        return redirect()->route('category')->with('data_cat', $category);
    }

    public function del($id)
    {
        $category = Category::find($id)->delete();
        return redirect()->route('category')->with('data_cat', $category);
    }

    public function brand()
    {
        $brand = Brand::get();
        return view('auth.inc.brand', ['data_brand' => $brand]);
    }

    public function create(Request $brand)
    {
        $data = $brand->validate([
            'name' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:128'
        ]);
        Image::make($brand->file('image'))->fit(120,120);
        $path = $brand->file('image')->store('images/brand', 'public');
        $data['image'] = $path;
        $brand = Brand::create($data)->paginate(15);
        return redirect()->route('brand')->with('data_cat', $brand);
    }

    public function del2($id)
    {
        $brand = Brand::find($id)->delete();
        return redirect()->route('brand')->with('data_brand', $brand);
    }

    public function savat()
    {
        $brand = Brand::get();
        $category = Category::get();

        return view('auth.inc.cat-brend', ['data_1' => $category, 'data_2' => $brand]);
    }
}
