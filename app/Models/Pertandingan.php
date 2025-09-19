<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    use HasFactory;

    protected $table = 'pertandingan';

    protected $fillable = [
        'kode_pertandingan',
        'tanggal',
        'home_team',
        'away_team',
        'stadion',
        'liga',
        'musim',
        'harga_tiket',
    ];
}
