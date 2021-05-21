<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    protected $fillable = ['transaksi_id', 'produk_id', 'total_item', 'catatan',
        'kode_promo', 'harga_asli', 'total_harga'];
}
