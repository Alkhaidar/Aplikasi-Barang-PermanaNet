<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'barangmasuks' => BarangMasuk::with('barang')->latest()->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barangmasuk.create', [
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
        Barang::where('id', $request->id_barang)->update(['stok' => ($stok + $request->stok)]);

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
            'barangmasuks' => $barangmasuk,
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
        $stokbarangmasuk = DB::table('barang_masuks')->where('id', $id)->value('stok');

        Barang::where('id', $request->id_barang)->update(['stok' => ($stokbarang - $stokbarangmasuk)]);

        $stok = DB::table('barangs')->where('id', $request->id_barang)->value('stok');
        Barang::where('id', $request->id_barang)->update(['stok' => ($stok + $request->stok)]);

        BarangMasuk::where('id', $id)->update($validatedData);
        return redirect('/barangmasuk')->with('success', 'Barang Masuk berhasil diupdate!');
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
        $stokbarangmasuk = DB::table('barang_masuks')->where('id', $id)->value('stok');

        Barang::where('id', $request->id_barang)->update(['stok' => ($stokbarang - $stokbarangmasuk)]);

        BarangMasuk::destroy($id);
        return redirect('/barangmasuk')->with('success', 'Barang Masuk berhasil dihapus!');
    }
}
