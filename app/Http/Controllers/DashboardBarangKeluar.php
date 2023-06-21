<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'barangkeluars' => BarangKeluar::with('barang')->latest()->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barangkeluar.create', [
            'barangs' => Barang::all()
        ]);
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
            'id_barang' => 'required|max:255',
            'date' => 'required',
            'stok' => 'required',
            'keterangan' => 'required|max:255'

        ]);

        $stok = DB::table('barangs')->where('id', $request->id_barang)->value('stok');
        Barang::where('id', $request->id_barang)->update(['stok' => ($stok - $request->stok)]);

        BarangKeluar::create($validatedData);
        return redirect('/barangkeluar')->with('success', 'Barang Keluar berhasil ditambahkan!');
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
            'barangkeluars' => $barangkeluar,
            'barangs' => Barang::all()
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
            'id_barang' => 'required|max:255',
            'date' => 'required',
            'stok' => 'required',
            'keterangan' => 'required|max:255'

        ]);

        $stokbarang = DB::table('barangs')->where('id', $request->id_barang)->value('stok');
        $stokbarangkeluar = DB::table('barang_keluars')->where('id', $id)->value('stok');

        Barang::where('id', $request->id_barang)->update(['stok' => ($stokbarang + $stokbarangkeluar)]);

        $stok = DB::table('barangs')->where('id', $request->id_barang)->value('stok');
        Barang::where('id', $request->id_barang)->update(['stok' => ($stok - $request->stok)]);

        BarangKeluar::where('id', $id)->update($validatedData);
        return redirect('/barangkeluar')->with('success', 'Barang Keluar berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $stokbarang = DB::table('barangs')->where('id', $request->id_barang)->value('stok');
        $stokbarangkeluar = DB::table('barang_keluars')->where('id', $id)->value('stok');

        Barang::where('id', $request->id_barang)->update(['stok' => ($stokbarang + $stokbarangkeluar)]);

        BarangKeluar::destroy($id);
        return redirect('/barangkeluar')->with('success', 'Barang Keluar berhasil dihapus!');
    }
}
