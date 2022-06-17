<?php

namespace App\Exports;

use App\Models\Note;
use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class NotesExport implements FromCollection, WithHeadings, WithStyles
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'No.',
            'NIK Pencatat',
            'Tanggal',
            'Waktu',
            'Lokasi',
            'Suhu Tubuh',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [1 => ['font' => ['bold' => true]]];
    }

    public function collection()
    {
        return Note::all()->map(
            fn ($note, $index)
            => [
                'nomor' => $index + 1,
                'nik_pencatat' => "'" . User::find($note->user_id)->nik . "'",
                'tanggal' => $note->tanggal,
                'waktu' => $note->waktu,
                'lokasi' => $note->lokasi,
                'suhu' => $note->suhu,
            ]
        );
    }
}
