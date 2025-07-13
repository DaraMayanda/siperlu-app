@extends('layout')

@section('title', 'Formulir Pengaduan')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card border-0 shadow-sm" style="background-color:rgb(239, 245, 247); width: 100%; max-width: 640px; border-radius: 20px;">
        <div class="card-body p-4 p-md-5">
            <h4 class="mb-4 text-primary fw-semibold">
                <i class="bi bi-pencil-square me-2"></i> Formulir Pengaduan Layanan
            </h4>

            <form method="POST" action="/laporan/store">
                @csrf

                <div class="mb-3">
                    <label class="form-label text-muted fw-medium">
                        <i class="bi bi-person-circle me-1"></i> Nama Lengkap
                    </label>
                    <input type="text" name="nama" class="form-control rounded-4" placeholder="Contoh: Budi Santoso" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-muted fw-medium">
                        <i class="bi bi-credit-card me-1"></i> NIK <small class="text-muted">(Opsional)</small>
                    </label>
                    <input type="text" name="nik" class="form-control rounded-4" placeholder="1234567890123456">
                </div>

                <div class="mb-3">
                    <label class="form-label text-muted fw-medium">
                        <i class="bi bi-envelope-at me-1"></i> Email <small class="text-muted">(Opsional)</small>
                    </label>
                    <input type="email" name="email" class="form-control rounded-4" placeholder="nama@email.com">
                </div>

                <div class="mb-3">
                    <label class="form-label text-muted fw-medium">
                        <i class="bi bi-ui-checks me-1"></i> Jenis Laporan
                    </label>
                    <select name="jenis_laporan" class="form-select rounded-4" required>
                        <option selected disabled value="">Pilih jenis laporan...</option>
                        <option value="Pengaduan">Pengaduan</option>
                        <option value="Permintaan Informasi">Permintaan Informasi</option>
                        <option value="Saran">Saran</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label text-muted fw-medium">
                        <i class="bi bi-chat-dots me-1"></i> Isi Laporan
                    </label>
                    <textarea name="isi_laporan" rows="4" class="form-control rounded-4" required placeholder="Tulis pengaduan Anda dengan jelas dan lengkap..."></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary px-4 rounded-4">
                        <i class="bi bi-send me-1"></i> Kirim Laporan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
