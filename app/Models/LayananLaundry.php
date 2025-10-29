<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananLaundry extends Model
{
    use HasFactory;

    protected $table = 'layanan_laundry';

    protected $fillable = [
        'nama_layanan', 'harga_perkilo', 'harga_permeter', 'harga_satuan'
    ];

    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'layanan_id');
    }
}