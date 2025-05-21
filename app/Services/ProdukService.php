<?php 
class ProdukService
{
    
    public static function getAllCategory()
    {
        return \App\Models\Kategori::where('bisnis_id', auth()->user()->business_id)->get();
    }
    public static function getProduk($id)
    {
        return \App\Models\Produk::where('id', $id)->first();
    }
}