<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $data = Supplier::all();
        return view('supplier.index', compact('data'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        Supplier::create($request->all());

        return redirect('/supplier');
    }

    public function edit($id)
    {
        $data = Supplier::findOrFail($id);

        return view('supplier.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Supplier::findOrFail($id);

        $data->update($request->all());

        return redirect('/supplier');
    }

    public function destroy($id)
    {
        $data = Supplier::findOrFail($id);

        $data->delete();

        return redirect('/supplier');
    }
}