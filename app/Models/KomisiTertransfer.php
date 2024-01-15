<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomisiTertransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_affiliate',
        'tanggal_transfer',
        'no_rekening',
        'jumlah_komisi_tertransfer',
        'status'
    ];
}
