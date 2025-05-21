<?php 

class UserPerusahaan
{
    public function get()
    {
        $ownerId = auth()->user()->id;
        $perusahaan = Business::where('owner_id', $ownerId)->get();
    }
    
}