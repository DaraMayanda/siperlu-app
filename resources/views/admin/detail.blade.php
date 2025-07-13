@extends('layout')
@section('title', 'Detail Laporan')

@section('content')
<div class="container d-flex justify-content-center">
    <div style="width: 100%; max-width: 720px;">

        <h4 class="mb-4 text-primary fw-semibold">
            <i class="bi bi-info-circle me-1"></i> Detail Laporan #{{ $laporan->id }}
        </h4>

        {{-- Informasi Laporan --}}
        <div class="card border-0 mb-4 shadow-sm" style="background-color: #f9fbfc;">
            <div class="card-header bg-light fw-semibold">
                Informasi Pengaduan
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <p class="mb-1 text-muted">Nama</p>
                        <p class="fw-semibold">{{ $laporan->nama }}</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1 text-muted">NIK</p>
                        <p class="fw-semibold">{{ $laporan->nik ?? '-' }}</p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <p class="mb-1 text-muted">Email</p>
                        <p class="fw-semibold">{{ $laporan->email ?? '-' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1 text-muted">Jenis Laporan</p>
                        <p class="fw-semibold">{{ $laporan->jenis_laporan }}</p>
                    </div>
                </div>

                <div class="mb-3">
                    <p class="mb-1 text-muted">Isi Laporan</p>
                    <p class="fw-semibold">{{ $laporan->isi_laporan }}</p>
                </div>

                <div class="mb-3">
                    <p class="mb-1 text-muted">Status Saat Ini</p>
                    <span class="badge 
                        {{ $laporan->status == 'Menunggu' ? 'bg-warning text-dark' : 
                            ($laporan->status == 'Diproses' ? 'bg-primary' : 'bg-success') }}">
                        {{ $laporan->status }}
                    </span>
                </div>
            </div>
        </div>

        {{-- Form Update Status --}}
        <div class="card border-0 shadow-sm" style="background-color: #f9fbfc;">
            <div class="card-header bg-light fw-semibold">
                Perbarui Status Laporan
            </div>
            <div class="card-body">
                <form action="/admin/laporan/{{ $laporan->id }}/update-status" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="status" class="form-label">Ubah Status</label>
                        <select name="status" id="status" class="form-select rounded-3" required>
                            <option value="Menunggu" {{ $laporan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                            <option value="Diproses" {{ $laporan->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                            <option value="Selesai" {{ $laporan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/admin/laporan" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left me-1"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle me-1"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
