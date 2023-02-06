<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $fillable = [
        'users_id',
        'siswas_id',
        'spps_id',
        'tgl_pembayaran',
        'bulan_bayar',
        'tahun_bayar',
        'jumlah_bayar'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'users_id');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Models\Siswa', 'id', 'siswas_id');
    }

    public function spp()
    {
        return $this->belongsTo('App\Models\Spp', 'id', 'spps_id');
    }
}
