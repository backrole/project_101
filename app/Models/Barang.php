<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'id_barang',
        'nama_barang',
        'stock_grosir',
        'stock_retail',
        'harga_grosir',
        'harga_retail',
        'isi_per_box',
        'status_pembayaran',
        'id_supplier',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/barangs/'.$this->getKey());
    }
}
