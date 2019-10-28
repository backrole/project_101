<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'bonus_barang',
        'diskon',
        'keterangan',
        'mulai_promo',
        'selesai_promo',
        'id_barang',
    
    ];
    
    
    protected $dates = [
        'mulai_promo',
        'selesai_promo',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/promos/'.$this->getKey());
    }
}
