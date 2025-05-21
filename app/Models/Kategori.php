<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $guarded = [];
    
    public function getNamaAttribute($value)
    {
        return ucwords($value);
    }
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
