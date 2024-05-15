<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function pelanggans()
    {
        return $this->belongsTo(Pelanggan::class, 'pelangganid', 'id');
    }

    public function produks()
    {
        return $this->belongsTo(Produk::class, 'produkid', 'id');
    }

}
