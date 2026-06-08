<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukSkincare;

class ProdukSkincareController extends Controller
{
    public function index()
    {
        $data = ProdukSkincare::all();

        return view('ProdukSkincare.index', compact('data'));
    }

    public function create()
    {
        return view('ProdukSkincare.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'merek' => 'required',
            'jenis_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
             'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa
        ]);

        ProdukSkincare::create($request->all());

        return redirect('/produk');
    }

    public function edit($id)
    {
        $data = ProdukSkincare::findOrFail($id);

        return view('ProdukSkincare.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ProdukSkincare::findOrFail($id);

        $data->update($request->all());

        return redirect('/produk');
    }

    public function destroy($id)
    {
        $data = ProdukSkincare::findOrFail($id);

        $data->delete();

        return redirect('/produk');
    }
}