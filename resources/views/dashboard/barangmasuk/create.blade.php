@extends('dashboard.layout.main')
@section('conten')

<div class="row mx-2">
    <div class="card ">
        <div class="card-body">
            <form action="{{ route('barangkeluar.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tanggalkeluar" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                    <div class="">
                        <input type="date" class="form-control @error('tanggalkeluar') is-invalid @enderror" id="tanggalkeluar" name="tanggalkeluar" value="{{ old('tanggalkeluar') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stok" class="col-sm-2 col-form-label">Stok Barang </label>
                    <div class="">
                        <input type="number" class="form-control @error('name') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="">
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-end">
                    <a href="{{ route('barangmasuk.index') }}" class="btn btn-secondary me-1">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection