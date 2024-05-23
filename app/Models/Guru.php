<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'nip'; // Set primary key menjadi 'nip'
    public $incrementing = false; // Karena 'nip' bukan incrementing
    protected $keyType = 'string'; // Jika 'nip' bukan integer

    protected $fillable = [
        'id',
        'nip',
        'nama',
        'jabatan',
        'alamat',
        'pend_akhir',
        'mapel_ajar',
    ];

}
