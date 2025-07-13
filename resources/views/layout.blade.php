<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - SIPERLU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color:rgb(134, 181, 212);
            color: #333;
            margin: 0;
        }

        .header {
            background: linear-gradient(to right, #0d47a1, #1565c0);
            color: white;
            padding: 40px 20px 25px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .header p {
            font-size: 1.05rem;
            color: #cfd8dc;
        }

        .navbar-siperlu {
            background-color: #2196f3;
            padding: 12px 0;
            display: flex;
            justify-content: center;
            gap: 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .navbar-siperlu a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .navbar-siperlu a:hover {
            background-color: #1976d2;
            transform: translateY(-2px);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .main-content {
            max-width: 960px;
            margin: 40px auto;
            background-color: #fff;
            padding: 2rem 2.5rem;
            border-radius: 16px;
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.05);
        }

        .alert-success {
            text-align: center;
        }

        table tr:hover {
            background-color: #1565c0;
        }

        .table thead {
            background-color:  #1565c0;
        }

        .form-control, .form-select {
            border-radius: 8px;
            transition: 0.2s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.15);
        }

        button.btn-primary {
            background-color: #1565c0;
            border-color: #1565c0;
        }

        button.btn-primary:hover {
            background-color: #0d47a1;
            border-color: #0d47a1;
        }

        @media (max-width: 768px) {
            .navbar-siperlu {
                flex-direction: column;
                align-items: center;
                gap: 12px;
            }

            .main-content {
                margin: 30px 1rem;
                padding: 1.5rem;
            }

            .header h1 {
                font-size: 2rem;
            }

            .header p {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <div class="header">
        <h1><i class="bi bi-shield-check"></i> SIPERLU</h1>
        <p>Sistem Informasi Pengaduan Layanan Jaminan Sosial</p>
    </div>

    {{-- Navbar --}}
    <div class="navbar-siperlu">
        <a href="/laporan/create"><i class="bi bi-pencil-square me-1"></i>Form Pengaduan</a>
        <a href="/admin/laporan"><i class="bi bi-card-list me-1"></i>Daftar Laporan</a>
        <a href="/admin/laporan/pdf"><i class="bi bi-file-earmark-pdf me-1"></i>Cetak PDF</a>
    </div>

    {{-- Alert --}}
    @if(session('success'))
        <div class="container mt-3">
            <div class="alert alert-success shadow-sm">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            </div>
        </div>
    @endif

    {{-- Konten Utama --}}
    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>
