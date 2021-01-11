@extends('layouts/layout')


@section('title', 'FP PPL C - Kelompok 2')
    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3 text-center">Pengeluaran</h1>
            </div>
        </div>
        <table class="table table-striped table-bordered mt-5">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Nama Toko</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengeluarans as $pengeluaran)
                    <tr>
                        <th scope="row">{{ $pengeluaran['id'] }}</th>
                        <td>{{ $pengeluaran['Tanggal'] }}</td>
                        <td>{{ $pengeluaran['Nama Barang'] }}</td>
                        <td>{{ $pengeluaran['Nama Toko'] }}</td>
                        <td>{{ $pengeluaran['Deskripsi'] }}</td>
                        <td>{{ $pengeluaran['Kategori'] }}</td>
                        <td>{{ $pengeluaran['Jumlah'] }}</td>
                        <td>Action</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection