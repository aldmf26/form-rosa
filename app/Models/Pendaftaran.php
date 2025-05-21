<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Pendaftaran extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;
    protected $table = 'pendaftarans';
    protected $guarded = [];

    public function getNamaLengkapAttribute($value)
    {
        return ucwords($value);
    }

    public function getAlamatAttribute($value)
    {
        return ucwords($value);
    }

    public function getInstagramFacebookAttribute($value)
    {
        return ucwords($value);
    }

    public function getTempatLahirAttribute($value)
    {
        return ucwords($value);
    }

    public function getTanggalLahirAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y');
    }

    public function getJenisKelaminAttribute($value)
    {
        return ucwords($value);
    }

    public function getSekolahDiAttribute($value)
    {
        return ucwords($value);
    }

    public function getAgamaAttribute($value)
    {
        return ucwords($value);
    }

    public function getNamaOrangtuaAttribute($value)
    {
        return ucwords($value);
    }

    public function getNoHpOrangtuaAttribute($value)
    {
        return ucwords($value);
    }

    public function getTanggalDaftarAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->translatedFormat('d F Y, H:i');
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y');
    }

    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y');
    }
}
