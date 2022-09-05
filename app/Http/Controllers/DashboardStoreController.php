<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class DashboardStoreController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function create()
    {
        return view('dashboard.index');
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        $store = new Store();
        $store->name = request('name');
        $store->user_id = $user->id;
        $store->save();
        return redirect('/dashboard')->with('success', 'Store berhasil ditambahkan');
    }
}
