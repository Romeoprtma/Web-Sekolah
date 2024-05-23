<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
                                 // Set primary key menjadi 'nip'
                                 // Karena 'nip' bukan incrementing
                                // Jika 'nip' bukan integer

    protected $fillable = [
        'id',
        'nis',
        'nama',
        'alamat',
        'th_ajar',
        'asal_sekolah',
    ];
}

