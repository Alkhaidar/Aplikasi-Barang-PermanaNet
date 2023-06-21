<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class DashboardBarangKeluar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.barangkeluar.index', [
            'barangkeluars' => BarangKeluar::latest()->get()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barangkeluar.create');
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
            'tanggalkeluar' => 'required',
            'stok' => 'required',
            'keterangan' => 'required|max:255'

        ]);

        BarangKeluar::create($validatedData);
        return redirect('/barangkeluar')->with('success', 'Barang Keluar Berhasil Ditambahkan!');
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
    public function edit(BarangKeluar $barangkeluar)
    {
        return view('dashboard.barangkeluar.edit', [
            'barangkeluars' => $barangkeluar
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
            'tanggalkeluar' => 'required',
            'stok' => 'required',
            'keterangan' => 'required|max:255'

        ]);

        BarangKeluar::where('id', $id)->update($validatedData);
        return redirect('/barangkeluar')->with('success', 'Barang Keluar berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BarangKeluar::destroy($id);
        return redirect('/barangkeluar')->with('success', 'Barang Keluar Berhasil Dihapus!');
    }
}
