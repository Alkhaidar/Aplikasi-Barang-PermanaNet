@extends('dashboard.layout.main')
@section('conten')
<div class="row">
<div class="col">
      @if (session()->has('success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    </div>
</div>

<!-- Batton -->
<div class="row">
    <div class="col d-flex justify-content-end ">
        <a class="btn btn-success" href="{{ route('barangmasuk.create') }}">
            <i class="fa-regular fa-plus me-2"></i>
            Tambah
        </a>
    </div>
</div>

<!-- Table -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Masuk</th>
                            <th>Stok</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barangmasuks as $barangmasuk)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$barangmasuk->name}}</td>
                            <td>{{$barangmasuk->tanggalmasuk}}</td>
                            <td>{{$barangmasuk->stok}}</td>
                            <td>{{$barangmasuk->keterangan}}</td>
                            <td>
                                <a href="{{ route('barangmasuks.edit', $barangmasuk->id) }}" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $loop->iteration }}">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </td>
                        </tr>

                        {{-- Modal Hapus Barang --}}
                        <div class="modal fade" id="modalHapus{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('barangmasuk.destroy', $barangmasuk->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <div class="modal-body">
                                            <p class="fs-6">Apakah anda yakin akan menghapus <b>{{ $barangmasuk->name }}</b> dari Barang Masuk?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- / Modal Hapus Barang --}}

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection