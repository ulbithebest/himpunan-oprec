<?php

// app/Models/Pendaftaran.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan
    protected $table = 'pendaftaran';  // Pastikan nama tabel benar

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'email',
        'divisi',
        'motivasi'
    ];
}

