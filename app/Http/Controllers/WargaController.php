<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        return view('warga.index', compact(['warga']));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        Warga::create($request->except(['_token','submit']));
        return redirect('/warga');
    }

    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('warga.edit', compact(['warga']));
    }

    public function update($id, Request $request)
    {
        $warga = Warga::find($id);
        $warga->update($request->except(['_token','submit']));
        return redirect('/warga');
    }
}
