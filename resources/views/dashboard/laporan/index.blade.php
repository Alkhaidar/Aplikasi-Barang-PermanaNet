@extends('dashboard.layout.main')
@section('conten')
    <!-- Table -->
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Barang Masuk
                </div>
                <div class="card-body">
                    <table id="myTable1" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Id Barang</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Masuk</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangmasuks as $barangmasuk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $barangmasuk->barang->name }}</td>
                                    <td>{{ $barangmasuk->date }}</td>
                                    <td>{{ $barangmasuk->stok }}</td>
                                    <td>{{ $barangmasuk->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Barang Keluar
                </div>
                <div class="card-body">
                    <table id="myTable2" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Id Barang</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Keluar</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangkeluars as $barangkeluar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $barangkeluar->barang->name }}</td>
                                    <td>{{ $barangkeluar->date }}</td>
                                    <td>{{ $barangkeluar->stok }}</td>
                                    <td>{{ $barangkeluar->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
