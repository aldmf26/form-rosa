<?php

if (!function_exists('tanggalId')) {
    /**
     * Mengambil jenis transaksi berdasarkan prefix atau semua jenis transaksi.
     * 
     * @param string|null $prefix
     * @return string|array
     */
    function tanggalId($tgl)
    {
        $dateStart = \Carbon\Carbon::parse($tgl)->locale('id');
        $dateStart->settings(['formatFunction' => 'translatedFormat']);
        return $dateStart->format('l, j F Y - h:i a');
    }
}
