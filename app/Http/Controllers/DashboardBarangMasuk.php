<?php

namespace App\Http\Controllers;


use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class DashboardBarangMasuk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.barangmasuk.index', [
            'barangmasuks' => BarangMasuk::latest()->get()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barangmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'tanggalmasuk' => 'required',
            'stok' => 'required',
            'keterangan' => 'required|max:255'

        ]);

        BarangMasuk::create($validatedData);
        return redirect('/barangmasuk')->with('success', 'Barang Masuk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangMasuk $barangmasuk)
    {
        return view('dashboard.barangmasuk.edit', [
            'barangmasuks' => $barangmasuk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'tanggalmasuk' => 'required',
            'stok' => 'required',
            'keterangan' => 'required|max:255'

        ]);

        BarangMasuk::where('id', $id)->update($validatedData);
        return redirect('/barangmasuk')->with('success', 'Barang Masuk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BarangMasuk::destroy($id);
        return redirect('/barangmasuk')->with('success', 'Barang Masuk berhasil dihapus!');
    }
}
