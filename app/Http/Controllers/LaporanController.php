<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        return redirect('/laporan/create');
    }

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_laporan' => 'required',
            'isi_laporan' => 'required',
        ]);

        Laporan::create($request->all());

        return redirect('/laporan/create')->with('success', 'Laporan berhasil dikirim!');
    }

    public function admin()
    {
        $data = Laporan::latest()->get();
        return view('admin.index', compact('data'));
    }

    public function show($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('admin.detail', compact('laporan'));
    }

    public function updateStatus(Request $request, $id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->status = $request->status;
        $laporan->save();

        return redirect()->back()->with('success', 'Status diperbarui.');
    }

    public function cetakSemua()
{
    $data = \App\Models\Laporan::all();
    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('laporan.pdf', compact('data'));
    return $pdf->download('laporan-pengaduan.pdf');
}

}
