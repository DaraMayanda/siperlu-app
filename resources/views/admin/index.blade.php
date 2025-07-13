@extends('layout')

@section('title', 'Dashboard Admin')
@section('header', 'Dashboard Admin – Daftar Laporan')

@section('content')
    <h4 class="mb-4 text-primary fw-semibold">
        <i class="bi bi-card-checklist me-1"></i> Daftar Laporan Pengaduan
    </h4>

    {{-- Tombol Cetak PDF --}}
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('laporan.pdf') }}" class="btn btn-danger shadow-sm">
            <i class="bi bi-file-earmark-pdf me-1"></i> Download PDF
        </a>
    </div>

    <table class="table table-hover shadow-sm rounded" style="background-color: #fdfefe;">
        <thead class="table-light">
            <tr class="align-middle text-center">
                <th style="width: 5%;">#</th>
                <th style="width: 20%;">Nama</th>
                <th style="width: 20%;">Jenis Laporan</th>
                <th style="width: 15%;">Status</th>
                <th style="width: 15%;">Tanggal</th>
                <th style="width: 15%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $laporan)
            <tr class="align-middle text-center">
                <td>{{ $loop->iteration }}</td>
                <td class="text-start">{{ $laporan->nama }}</td>
                <td>{{ $laporan->jenis_laporan }}</td>
                <td>
                    <span class="badge 
                        {{ $laporan->status == 'Menunggu' ? 'bg-warning text-dark' : 
                            ($laporan->status == 'Diproses' ? 'bg-primary' : 'bg-success') }}">
                        {{ $laporan->status }}
                    </span>
                </td>
                <td>{{ $laporan->created_at->format('d M Y') }}</td>
                <td>
                    <a href="/admin/laporan/{{ $laporan->id }}" class="btn btn-sm btn-outline-info">
                        <i class="bi bi-eye"></i> Detail
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center text-muted">Belum ada laporan yang masuk.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection
