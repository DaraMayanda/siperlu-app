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
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            background-color: #f1f3f6;
            color: #333;
        }

        .header {
            background-color: #0d47a1;
            color: white;
            padding: 40px 0 20px;
            text-align: center;
        }

        .header h1 {
            margin-bottom: 8px;
            font-size: 2.4rem;
            font-weight: 600;
        }

        .header p {
            font-size: 1rem;
            color: #cfd8dc;
            margin-bottom: 0;
        }

        .navbar-siperlu {
            background-color: #2196f3;
            padding: 10px 0;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .navbar-siperlu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 6px 12px;
            transition: background 0.3s;
        }

        .navbar-siperlu a:hover {
            background-color: #1976d2;
            border-radius: 4px;
        }

        .main-content {
            max-width: 900px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 2rem 2.5rem;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        }

        .alert-success {
            text-align: center;
        }

        @media (max-width: 768px) {
            .main-content {
                margin: 20px 1rem;
                padding: 1.5rem;
            }

            .navbar-siperlu {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <div class="header">
        <h1>SIPERLU</h1>
        <p>Sistem Informasi Pengaduan Layanan Jaminan Sosial</p>
    </div>

    {{-- Navbar --}}
    <div class="navbar-siperlu">
        <a href="/laporan/create">Form Pengaduan</a>
        <a href="/admin/laporan">Daftar Laporan</a>
        <a href="/admin/laporan/pdf">Cetak PDF</a>
    </div>

    {{-- Success Alert --}}
    @if(session('success'))
        <div class="container mt-3">
            <div class="alert alert-success">{{ session('success') }}</div>
        </div>
    @endif

    {{-- Konten --}}
    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>
