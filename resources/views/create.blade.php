@extends('layouts/layout')

@section('title', 'Form Pengeluaran')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 class="text-center mt-3">Form Pengeluaran</h2>
                <form method="post" action="/">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal">tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid
                        @enderror" id="tanggal" placeholder="Masukkan tanggal" name="tanggal" value="{{ old('tanggal') }}">
                        @error('tanggal')
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
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" placeholder="Masukkan Harga"
                        name="jumlah" value="{{ old('jumlah') }}">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection