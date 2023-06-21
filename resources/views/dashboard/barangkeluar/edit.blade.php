@extends('dashboard.layout.main')
@section('conten')

<div class="row mx-2">
    <div class="card ">
        <div class="card-body">
            <form action="{{ route('barangkeluar.update', $barangkeluars->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3 me-2 row ">
                    <label for="id_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="">
                        <select class="form-select" name="id_barang" id="id_barang">
                            @foreach ($barangs as $barang)
                              @if (old('id_barang', $barangkeluars->id_barang) == $barang->id)
                                <option value="{{ $barang->id }}" selected>{{ $barang->name }}</option>
                              @else
                                <option value="{{ $barang->id }}">{{ $barang->name }}</option>
                              @endif
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="date" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                    <div class="">
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date', $barangkeluars->date) }}">
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
                        <input type="number" class="form-control @error('name') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok', $barangkeluars->stok) }}">
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
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan', $barangkeluars->keterangan) }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-end">
                    <a href="{{ route('barangkeluar.index') }}" class="btn btn-secondary me-1">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
