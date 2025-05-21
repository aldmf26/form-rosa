<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    protected $casts = [
        'price' => 'integer',
    ];

    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    public function businesses()
    {
        return $this->belongsToMany(Business::class, 'business_addons')
            ->withPivot('start_date', 'end_date')
            ->withTimestamps();
    }
}
