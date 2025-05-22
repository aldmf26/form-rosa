<?php

namespace App\Http\Livewire;

use App\Models\Pendaftaran;
use Livewire\Component;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $totalPendaftar;
    public $pendaftarAktif;
    public $pendaftarTidakAktif;
    public $pendaftarBulanIni;
    public $pendaftarHariIni;
    public $pendaftarPerBulan;
    public $statusPendaftar;
    public $pendaftarPerHari;

    public function mount()
    {
        $now = Carbon::now();

        // Total Pendaftar
        $this->totalPendaftar = Pendaftaran::count();

        // Pendaftar Aktif
        $this->pendaftarAktif = Pendaftaran::where('is_active', true)->count();
        $this->pendaftarTidakAktif = Pendaftaran::where('is_active', false)->count();


        // Pendaftar Bulan Ini (Mei 2025)
        $this->pendaftarBulanIni = Pendaftaran::whereMonth('tanggal_daftar', $now->month)
            ->whereYear('tanggal_daftar', $now->year)
            ->count();

        // Pendaftar Hari Ini (23 Mei 2025)
        $this->pendaftarHariIni = Pendaftaran::whereDate('tanggal_daftar', $now->toDateString())->count();

        // Data untuk Grafik Pendaftar per Bulan (Setahun terakhir)
        $this->pendaftarPerBulan = Pendaftaran::selectRaw('MONTH(tanggal_daftar) as bulan, YEAR(tanggal_daftar) as tahun, COUNT(*) as jumlah')
            ->where('tanggal_daftar', '>=', $now->subYear())
            ->groupBy('tahun', 'bulan')
            ->orderBy('tahun', 'asc')
            ->orderBy('bulan', 'asc')
            ->get()
            ->mapWithKeys(function ($item) {
                return [Carbon::create($item->tahun, $item->bulan, 1)->format('Y-m') => $item->jumlah];
            });

        // Data untuk Grafik Distribusi Status
        $this->statusPendaftar = [
            'aktif' => $this->pendaftarAktif,
            'tidak_aktif' => $this->totalPendaftar - $this->pendaftarAktif,
        ];

        // Data untuk Grafik Pendaftar per Hari (Bulan Ini)
        $daysInMonth = $now->daysInMonth; // Jumlah hari di Mei 2025 (31)
        $dailyData = Pendaftaran::selectRaw('DAY(tanggal_daftar) as hari, COUNT(*) as jumlah')
            ->whereMonth('tanggal_daftar', $now->month)
            ->whereYear('tanggal_daftar', $now->year)
            ->groupBy('hari')
            ->orderBy('hari', 'asc')
            ->pluck('jumlah', 'hari')
            ->toArray();

        $this->pendaftarPerHari = collect(array_fill(1, $daysInMonth, 0))
            ->mapWithKeys(function ($value, $key) use ($dailyData) {
                return [$key => $dailyData[$key] ?? 0];
            });
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}