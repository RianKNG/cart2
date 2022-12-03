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
        // dd($totalp);
        // $total = Drd::select(DB::raw("sum(pakai) as total"))
        // ->where('cabang','=','paseh')
        // ->groupby('cabang')
        // ->orderBy('bulan','DESC')
        //                 // ->GroupBy(DB::raw("cabang"))
        //                 // ->OrderBy("cabang","desc")
        //                 // // ->get ();
        //                 ->pluck('total');
        // $total = DrdModel::select(
           
            // DB::raw('EXTRACT(YEAR from created_at) as bulan'),
        //     DB::raw('COUNT(stand_awal) as total'),
            

        // )
        // ->GroupBy('cabang')
        // ->get()
        // ->toArray();
            // dd(json_encode($total));              
                        // ->get();
      // $total = Drd::select(DB::raw("sum(pakai) as total"))
      //                   ->GroupBy(DB::raw("cabang"))
      //                   ->OrderBy("cabang","desc")
      //                   // ->get ();
      //                   ->pluck('total');
                        // echo 
                        // dd(json_encode($total));
                        // foreach($total as $entry) {
                        //         $output[$entry->day] = $entry->count;
                        //     // }
                        // dd($total);
                        // }
        //    $sambungan = DB::table('pembayaran')
        //         ->select('harga_air') 
        //         ->where('no_sambungan', '=', 14 )
        //         // ->orderBy('no_rekening','DESC','LIMI','=','1')
        //         ->get();
 // dd($sambungan);
                //   $sambungansatu = DB::table('pembayaran')
                // ->select('harga_air') 
                // ->where('no_sambungan', '=', 13)
                // // ->orderBy('no_rekening','DESC','LIMI','=','1')
                // ->get();
                // // ->pluck('sambungan');
                //  $sambungandua= DB::table('pembayaran')
                // ->select('harga_air') 
                // ->where('no_sambungan', '=', 12)
                // // ->orderBy('no_rekening','DESC','LIMI','=','1')
                // ->get();


                // dd($sambungan);
         
    //   $sumok = $sambungan->sum('harga_air');
    // //   dd($sumok);
    //   $sumoksatu = $sambungansatu->sum('harga_air');
    //   // dd($sumoksatu);
    //   $sumokdua = $sambungandua->sum('harga_air');
    //   // dd($sumokdua);
    //   $sumoktiga = $sumok + $sumoksatu + $sumokdua;
    //   // dd($sumoktiga);
    //   //berdarkan tanggal
    //      $tanggal = DB::table('pembayaran')
    //             ->select('harga_air') 
    //             ->where('no_sambungan', '=', 14 )
    //             // ->orderBy('created_at','DESC','LIMI','=','1')
    //             ->get();
//  dd(json_encode($tanggal));
                //   $sambungansatu = DB::table('pembayaran')
                // ->select('harga_air') 
                // ->where('no_sambungan', '=', 13)
                // // ->orderBy('no_rekening','DESC','LIMI','=','1')
                // ->get();
                //   $sambungandua = DB::table('pembayaran')
                // ->select('harga_air') 
                // ->where('no_sambungan', '=', 12)
                // ->orderBy('no_rekening','DESC','LIMI','=','1')
                // ->get();

                // dd($sambungandua);
                // ->pluck('sambungan');
        // $sum_ts1 = $stand_awal->sum('13');
      //   $sum_all_ts = $sum_ts2 + $sum_ts1;
                // $data = DB::table('pembayaran')
                // ->select([
                //         DB::raw('sum(harga_air) as `count`'), 
                //         DB::raw('DATE(created_at) as day')
                //         ])->groupBy('day')
                //         ->where('created_at', '>', Carbon::now()->subWeeks(1))
                //         ->get();
//                         $output = [];
// foreach($data as $entry) {
//     $output[$entry->day] = $entry->count;
// }

// dd($output);
// dd($data);
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

// dd($output);
      // dd($data);
                         // $categories = [];

        // $bulan = Grafik::select(DB::raw("DAYNAME(created_at) as bulan"))
        //                 ->groupBy(DB::raw("DAYNAME(created_at)"))
        //                 ->pluck('bulan');
                        // dd(json_encode($bulan));
            
            // dd($bulan);
            return view('v_chart', compact('x','total','totalp','totalt'));
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