<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Business extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'type',
        'address',
        'phone',
        'subscription_id',
        'logo_url',
        'sosmed',
        'service_charge_enabled',
        'service_charge_percentage',
        'tax_enabled',
        'tax_percentage',
        'receipt_message',
        'subscription_start',
        'subscription_end'
    ];


    public function addons()
    {
        return $this->belongsToMany(Addon::class, 'business_addons')
            ->withPivot('start_date', 'end_date')
            ->withTimestamps();
    }
    // Cek apakah bisnis punya add-on aktif
    public function hasActiveAddon($addonName)
    {
        return $this->addons()
            ->where('name', $addonName)
            ->where(function ($query) {
                $query->whereNull('business_addons.end_date')
                    ->orWhere('business_addons.end_date', '>=', now());
            })->exists();
    }
}
