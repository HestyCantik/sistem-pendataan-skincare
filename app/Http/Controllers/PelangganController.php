<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();

        return view('pelanggan.index', compact('data'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        Pelanggan::create($request->all());

        return redirect('/pelanggan');
    }

    public function edit($id)
    {
        $data = Pelanggan::findOrFail($id);

        return view('pelanggan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pelanggan::findOrFail($id);

        $data->update($request->all());

        return redirect('/pelanggan');
    }

    public function destroy($id)
    {
        $data->delete();

        return redirect('/pelanggan');
    }
}


