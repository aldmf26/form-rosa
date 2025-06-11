<?php

if (!function_exists('tanggalId')) {
    function tanggalId($tgl)
    {
        $dateStart = \Carbon\Carbon::parse($tgl)->locale('id');
        $dateStart->settings(['formatFunction' => 'translatedFormat']);
        return $dateStart->format('l, j F Y - h:i a');
    }
}
if (!function_exists('tanggal')) {
    function tanggal($tgl)
    {
        $dateStart = \Carbon\Carbon::parse($tgl)->locale('id');
        $dateStart->settings(['formatFunction' => 'translatedFormat']);
        return $dateStart->format('l, j F Y');
    }
}
