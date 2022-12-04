<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drd;
use App\Imports\DrdImport;
use Maatwebsite\Excel\Facades\Excel;
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class DrdController extends Controller
{
    public function index(Request $request)
    {
        $x = Drd::paginate(5);
          $total = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as total')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('total');

        $totalp = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as totalp')
        ->where('cabang', '=', 'paseh')
        ->groupBy('bulan')
        ->orderBy('bulan', 'DESC')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('totalp');
        // dd($totalp);
           $totalt = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as totalt')
        ->where('cabang', '=', 'tomo')
        ->groupBy('bulan')
        ->orderBy('bulan', 'DESC')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('totalt');
        
                $datat = DB::table('tbl_drd')
                ->select([
                        DB::raw('count(cabang) as cab'), 
                        // DB::raw('bulan as bul')
                        ])->groupBy('bulan')
                ->orderBy('bulan', 'ASC')
                        ->where('cabang', '=', 'tomo')
                        ->get();
                $datap = DB::table('tbl_drd')
                ->select([
                        DB::raw('count(cabang) as cab'), 
                        // DB::raw('bulan as bul')
                        ])->groupBy('bulan')
                ->orderBy('bulan', 'ASC')
                        ->where('cabang', '=', 'paseh')
                        ->get();
                $datac = DB::table('tbl_drd')
                ->select([
                        DB::raw('count(cabang) as cab'), 
                        // DB::raw('bulan as bul')
                        ])->groupBy('bulan')
                ->orderBy('bulan', 'ASC')
                        ->where('cabang', '=', 'cimanggung')
                        ->get();
                        // dd($datat);
     
        
//  $data = DB::table('pembayaran')
//                 ->select([
//                         DB::raw('sum(harga_air) as `value`'), 
//                         DB::raw('MONTH(created_at) as a')
//                         ])->groupBy('a')
//                         ->where('created_at', '>=', Carbon::now()->subDays(1))
//                         ->get();

// foreach($data as $entry) {

//     $output[$entry->value] = $entry->a;
// }


            return view('v_chart', compact('x','total','totalp','totalt','datat','datac','datap'));
    //                     return view('coba');
    }
    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('DrdData', $namafile);

        Excel::import(new DrdImport, \public_path('/DrdData/'.$namafile));
        return redirect()->back();

    }
    public function ss()
    {
        return view('a');
    }
}