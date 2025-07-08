<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'email',
        'jenis_laporan',
        'isi_laporan',
        'status',
    ];
}
