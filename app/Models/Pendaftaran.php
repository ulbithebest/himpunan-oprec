<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan
    protected $table = 'pendaftaran';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'user_id',
        'jurusan',
        'divisi',
        'motivasi',
        'foto_diri',
        'cv_sertif'
    ];

    // Definisikan relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
