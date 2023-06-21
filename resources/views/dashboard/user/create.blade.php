@extends('dashboard.layout.main')
@section('conten')

<div class="row mx-2">
    <div class="card ">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
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
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jeniskelamin" class="col-sm-2 col-form-label">jenis Kelamin</label>
                    <div class="">
                        <select class="form-select" name="jeniskelamin" id="jeniskelamin">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
                    <div class="">
                        <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" value="{{ old('nohp') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="">
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-end">
                    <a href="{{ route('user.index') }}" class="btn btn-secondary me-1">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
