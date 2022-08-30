<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('store_id', auth()->user()->id)->get();

        return view('dashboard.product.index', [
            'products' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        // $validateData = $request->validate([
        //     'name' => 'required',
        //     'photo' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',

        // ]);

        // Product::create($validateData);

        // return redirect('/dashboard/product')->with('success', 'Produck berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required',
            'photo' => 'required',
            'price' => 'required',
            'description' => 'required',
        ];
        $validateData = $request->validate($rules);

        Product::where('id', $product->id)
            ->update($validateData);

        // if ($artikel->author->id !== auth()->user()->id) {
        //     abort(403);
        // }

        return redirect('/dashboard/product')->with('success', 'Product berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect('/dashboard/product')->with('success', 'Product berhasil dihapus');
    }
}
