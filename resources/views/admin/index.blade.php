@extends('layout')

@section('title', 'Dashboard Admin')
@section('header', 'Dashboard Admin – Daftar Laporan')

@section('content')
    <a href="/admin/laporan/pdf" class="btn btn-danger mb-3">Download Laporan PDF</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $laporan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $laporan->nama }}</td>
                <td>{{ $laporan->jenis_laporan }}</td>
                <td>
                    <span class="badge bg-{{ $laporan->status == 'Menunggu' ? 'warning' : ($laporan->status == 'Diproses' ? 'primary' : 'success') }}">
                        {{ $laporan->status }}
                    </span>
                </td>
                <td>{{ $laporan->created_at->format('d-m-Y') }}</td>
                <td><a href="/admin/laporan/{{ $laporan->id }}" class="btn btn-sm btn-info">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
