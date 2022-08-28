<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    public function index()
    {
        // return view('dashboard.product.index');
        $product = Product::where('store_id', auth()->user()->id)->get();

        return view('dashboard.product.index', [
            'products' => $product
        ]);
    }

    public function create()
    {
        return view('dashboard.product.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $product = new Product();
        $product->name = request('name');
        $product->slug = Str::slug(request('name'));
        $product->price = request('price');
        $product->store_id = request('store_id');
        $product->photo = request('photo');
        $product->description = request('description');
        $product->store_id = $user->store->id;
        $product->save();
        return redirect('/dashboard/product')->with('success', 'Product berhasil ditambahkan');
    }

    // public function destroy(Product $product)
    // {
    //     if ($product->photo) {
    //         Storage::delete($product->photo);
    //     }
    //     Product::destroy($product->id);

    //     return redirect('/dashboard/product')->with('success', 'Product berhasil dihapus');
    // }

    // public function destroy(Product $product)
    // {

    //     $product::destroy($product->id);

    //     return redirect('/dashboard/product')->with('success', 'Product berhasil dihapus');
    // }
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update($request->all());

        return redirect('dashboard/product')->with('success', ' Data telah diperbaharui!');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
