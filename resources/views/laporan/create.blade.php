@extends('layout')

@section('title', 'Formulir Laporan')
@section('header', 'Formulir Pengaduan Layanan')

@section('content')
    <form method="POST" action="/laporan/store">
        @csrf
        <div class="mb-2">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>NIK (Opsional)</label>
            <input type="text" name="nik" class="form-control">
        </div>
        <div class="mb-2">
            <label>Email (Opsional)</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-2">
            <label>Jenis Laporan</label>
            <select name="jenis_laporan" class="form-control" required>
                <option value="Pengaduan">Pengaduan</option>
                <option value="Permintaan Informasi">Permintaan Informasi</option>
                <option value="Saran">Saran</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="mb-2">
            <label>Isi Laporan</label>
            <textarea name="isi_laporan" class="form-control" rows="4" required></textarea>
        </div>
        <button class="btn btn-primary mt-2">Kirim Laporan</button>
    </form>
@endsection
