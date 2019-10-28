<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keperluan extends Model
{
    protected $fillable = [
        'jenis_keperluan',
        'biaya_keluar',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/keperluans/'.$this->getKey());
    }
}
