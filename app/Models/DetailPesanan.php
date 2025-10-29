<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pesanan';

    protected $fillable = [
        'pesanan_id', 'layanan_id', 'nama_item',
        'jenis_layanan', 'jumlah_kilo', 'jumlah_meter', 'sub_total'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }

    public function layanan()
    {
        return $this->belongsTo(LayananLaundry::class, 'layanan_id');
    }
}