<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $data = Brand::all();

        return view('brand.index', compact('data'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_brand' => 'required',
            'negara_asal' => 'required',
        ]);

        Brand::create([
            'nama_brand' => $request->nama_brand,
            'negara_asal' => $request->negara_asal,
        ]);

        return redirect('/brand');
    }

    public function edit($id)
    {
        $data = Brand::findOrFail($id);

        return view('brand.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Brand::findOrFail($id);

        $data->update([
            'nama_brand' => $request->nama_brand,
            'negara_asal' => $request->negara_asal,
        ]);

        return redirect('/brand');
    }

    public function destroy($id)
    {
        $data = Brand::findOrFail($id);

        $data->delete();

        return redirect('/brand');
    }
}