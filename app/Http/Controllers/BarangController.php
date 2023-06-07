<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tittle = 'List Barang';

        // $harga = Barang::find(1)->price;
        // $FormatHarga = 'Rp. ' . number_format($harga, 0, ',', '.');

        $Barang = Barang::all();
        foreach ($Barang as $brg) {
            $brg->hg_barang = 'Rp. ' . number_format($brg->hg_barang, 0, ',', '.');
        }

        return view('barang.index', compact('Tittle', 'Barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Tittle = 'Input Barang';

        $satuans = Satuan::all();

        return view('barang.create', compact('Tittle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':Attribute Mohon untuk diisi.',
            'numeric' => ':Attribute hanya boleh berupa angka',
            'unique' => ':Attribute sudah ada dalam list'
        ];

        $validator = Validator::make($request->all(), [
            'Kode_Barang' => 'required|unique:barangs,kode_barang',
            'Nama_Barang' => 'required',
            'Harga_Barang' => 'required|numeric',
            'Deskripsi_Barang' => 'required',
        ], $message);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();

        }

        $barang = New Barang;
        $barang->kode_barang = $request->Kode_Barang;
        $barang->nm_barang = $request->Nama_Barang;
        $barang->hg_barang = $request->Harga_Barang;
        $barang->desc_barang = $request->Deskripsi_Barang;
        $barang->satuan_id = $request->Nama_Satuan;
        $barang->save();

        return redirect()->route('Barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Tittle = 'Detail Barang';

        $Barang = Barang::find($id);
        $Barang->hg_barang = 'Rp. '.number_format($Barang->hg_barang,0, ',', '.');

        return view('barang.show', compact('Tittle', 'Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Tittle = 'Edit Barang';

        $barang = Barang::find($id);
        $satuan = Satuan::all();

        return view('barang.edit', compact('Tittle', 'barang', 'satuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = [
            'required' => ':Attribute Mohon untuk diisi.',
            'numeric' => ':Attribute hanya boleh berupa angka',
            'unique' => ':Attribute sudah ada dalam list'
        ];

        $validator = Validator::make($request->all(), [
            'Kode_Barang' => 'required',
            'Nama_Barang' => 'required',
            'Harga_Barang' => 'required|numeric',
            'Deskripsi_Barang' => 'required',
        ], $message);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();

        }

        $barang = Barang::find($id);
        $barang->kode_barang = $request->Kode_Barang;
        $barang->nm_barang = $request->Nama_Barang;
        $barang->hg_barang = $request->Harga_Barang;
        $barang->desc_barang = $request->Deskripsi_Barang;
        $barang->satuan_id = $request->Nama_Satuan;
        $barang->save();

        return redirect()->route('Barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();

        return redirect()->route('Barang.index');
    }
}
