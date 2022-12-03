<?php

namespace App\Imports;

use App\Models\Drd;
use Maatwebsite\Excel\Concerns\ToModel;

class DrdImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Drd([
            'no_sambungan' => $row[1],
            'no_rekening' => $row[2],
            'nama_pelanggan' => $row[3],
            'alamat' => $row[4],
            'kode_gol' => $row[5],
            'stand_awal' => $row[6],
            'stand_akhir' => $row[7],
            'pakai' => $row[8],
            'harga_air' => $row[9],
            'beban_tetap' => $row[10],
            'materai' => $row[11],
            'total_rekening' => $row[12],
            'cabang' => $row[13],
            'bulan' => $row[14],
            'tahun' => $row[15],
        ]);
    }
}
