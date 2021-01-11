@extends('layouts/layout')

@section('title', 'Form Pengeluaran')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 class="text-center mt-3">Form Pengeluaran</h2>


                <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                        <label for="Tanggal">Tanggal</label>
                        <input type="text" class="form-control @error('Tanggal') is-invalid
                        @enderror" id="Tanggal" placeholder="Masukkan Tanggal" name="Tanggal" value="{{ old('Tanggal') }}">
                        @error('Tanggal')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control @error('kategori') is-invalid
                        @enderror" id="kategori" placeholder="Masukkan Kategori" name="kategori" value="{{ old('kategori') }}">
                        @error('kategori')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang"
                        name="nama_barang" value="{{ old('nama_barang') }}">
                    </div>

                    <div class="form-group">
                        <label for="nama_toko">Nama Toko</label>
                        <input type="text" class="form-control" id="nama_toko" placeholder="Masukkan Nama Toko"
                        name="nama_toko" value="{{ old('nama_toko') }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi"
                        name="deskripsi" value="{{ old('deskripsi') }}">
                    </div>

                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="text" class="form-control" id="qty" placeholder="Masukkan Qty"
                        name="qty" value="{{ old('qty') }}">
                    </div>

                    <div class="form-group">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input type="text" class="form-control" id="harga_satuan" placeholder="Masukkan Harga Satuan"
                        name="harga_satuan" value="{{ old('harga_satuan') }}">
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection