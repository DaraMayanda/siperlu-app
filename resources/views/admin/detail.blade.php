@extends('layout')
@section('title', 'Detail Laporan')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Detail Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h3>Detail Laporan #{{ $laporan->id }}</h3>

        <div class="card mt-3">
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $laporan->nama }}</p>
                <p><strong>NIK:</strong> {{ $laporan->nik ?? '-' }}</p>
                <p><strong>Email:</strong> {{ $laporan->email ?? '-' }}</p>
                <p><strong>Jenis Laporan:</strong> {{ $laporan->jenis_laporan }}</p>
                <p><strong>Isi:</strong> {{ $laporan->isi_laporan }}</p>
                <p><strong>Status Saat Ini:</strong> 
                    <span class="badge bg-{{ $laporan->status == 'Menunggu' ? 'warning' : ($laporan->status == 'Diproses' ? 'primary' : 'success') }}">
                        {{ $laporan->status }}
                    </span>
                </p>
                <form action="/admin/laporan/{{ $laporan->id }}/update-status" method="POST" class="mt-3">
                    @csrf
                    <label>Ubah Status:</label>
                    <select name="status" class="form-control mb-2" required>
                        <option value="Menunggu" {{ $laporan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                        <option value="Diproses" {{ $laporan->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                        <option value="Selesai" {{ $laporan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                    <button class="btn btn-success">Perbarui Status</button>
                    <a href="/admin/laporan" class="btn btn-secondary ms-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
