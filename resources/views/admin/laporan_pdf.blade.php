<!DOCTYPE html>
<html>
<head>
    <title>Laporan PDF</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #999; padding: 6px; text-align: left; }
        th { background-color: #f2f2f2; }
        h3 { text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h3>Laporan Pengaduan</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $laporan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $laporan->nama }}</td>
                <td>{{ $laporan->jenis_laporan }}</td>
                <td>{{ $laporan->status }}</td>
                <td>{{ $laporan->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
