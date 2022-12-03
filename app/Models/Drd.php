<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drd extends Model
{
    use HasFactory;

    protected $table = "tbl_drd";

    protected $fillable = ['no_sambungan', 'no_rekening', 'nama_pelanggan', 'alamat', 'kode_gol', 'stand_awal', 'stand_akhir', 'pakai', 'harga_air', 'beban_tetap','materai','total_rekening','cabang','bulan','tahun'];
    protected $updated_at  = false;
    protected $created_at = false;
   
}
