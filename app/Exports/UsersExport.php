<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromCollection, WithHeadings, WithStyles
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'No.',
            'NIK',
            'Nama',
            'Jumlah Catatan',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [1 => ['font' => ['bold' => true]]];
    }

    public function collection()
    {
        return User::all()->map(
            fn ($user, $index) =>
            [
                'nomor' => $index + 1,
                'nik' => "'$user->nik'",
                'nama' => $user->nama,
                'jumlah_catatan' => $user->notes()->count(),
            ]
        );
    }
}
