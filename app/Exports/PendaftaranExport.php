<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PendaftaranExport implements FromCollection, WithHeadings, WithStyles
{
    protected $pendaftar;

    public function __construct($pendaftar)
    {
        $this->pendaftar = $pendaftar;
    }

    public function collection()
    {
        // Ubah data menjadi koleksi yang sesuai dengan format Excel
        return $this->pendaftar->map(function ($item) {
            return [
                'ID Pendaftar' => $item->id,
                'No Telepon' => $item->no_hp,
                'Nama Lengkap' => $item->nama_lengkap,
                'Alamat' => $item->alamat,
                'Instagram/Facebook' => $item->instagram_facebook,
                'Tempat Lahir' => $item->tempat_lahir,
                'Tanggal Lahir' => $item->tanggal_lahir,
                'Jenis Kelamin' => $item->jenis_kelamin,
                'Sekolah di' => $item->sekolah_di,
                'Agama' => $item->agama,
                'Nama Orangtua' => $item->nama_orangtua,
                'No Telepon Orangtua' => $item->no_hp_orangtua,
                'Status Aktif' => $item->is_active ? 'Aktif' : 'Tidak Aktif',
                'Tanggal Daftar' => $item->tanggal_daftar,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID Pendaftar',
            'No Telepon',
            'Nama Lengkap',
            'Alamat',
            'Instagram/Facebook',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Sekolah di',
            'Agama',
            'Nama Orangtua',
            'No Telepon Orangtua',
            'Status Aktif',
            'Tanggal Daftar',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:N' . $sheet->getHighestRow())->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $sheet->getStyle('A1:P1')->getFont()->setBold(true);

        foreach ($sheet->getColumnIterator() as $column) {
            $sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
        }
    }
}
