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
        //grafik Garis
        //m3
          $total = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as total')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('total');
        // dd(json_encode($total));
        // dd($total);
        $totalp = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as totalp')
        ->where('cabang', '=', 'paseh')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('totalp');
        // dd($totalp);
           $totalt = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as totalt')
        ->where('cabang', '=', 'tomo')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        ->pluck('totalt');
        //sum uang
        $sumc = DB::table('tbl_drd')
        ->selectRaw('sum(total_rekening) as sumc')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('sumc');
        // dd(json_encode($total));
        // dd($sumc);
        $sump = DB::table('tbl_drd')
        ->selectRaw('sum(total_rekening) as sump')
        ->where('cabang', '=', 'paseh')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('sump');
        // dd($totalp);
           $sumt = DB::table('tbl_drd')
        ->selectRaw('sum(total_rekening) as sumt')
        ->where('cabang', '=', 'tomo')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        ->pluck('sumt');
        //grafik Batang
          $totalsatu = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as totalsatu')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        ->orderBy('bulan', 'desc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('totalsatu');
        // dd(json_encode($total));
        // dd($totalsatu);
        $totaldua = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as totaldua')
        ->where('cabang', '=', 'paseh')
        ->groupBy('bulan')
        ->orderBy('bulan', 'desc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('totaldua');
        // dd($totalp);
           $totaltiga = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as totaltiga')
        ->where('cabang', '=', 'tomo')
        ->groupBy('bulan')
        ->orderBy('bulan', 'desc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        ->pluck('totaltiga');


        
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
                 ->where('cabang', '=', 'cimanggung')
                        ->orderBy('bulan', 'asc')
                       
                        ->get();
                        // ->toArray();
                        // dd($datac);
                        

        $totc = DB::table('tbl_drd')
        ->selectRaw('count(cabang) as totc')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('totc');
        // dd($totc);
        $totp = DB::table('tbl_drd')
        ->selectRaw('count(cabang) as totp')
        ->where('cabang', '=', 'paseh')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        // ->groupBy('total_rekening',)
        // ->orderby('total_rekening', 'DESC')
        
        ->pluck('totp');

        $tott = DB::table('tbl_drd')
        ->selectRaw('count(cabang) as tott')
        ->where('cabang', '=', 'tomo')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        ->pluck('tott');

        //berdasarkan gol sosial umum paseh Tomo Cimanggugn
        $suc = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as suc')
        ->where('kode_gol', '=', '11')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->get();
        //sosial umum
        // dd($suc);

          $sut = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as sut')
        ->where('kode_gol', '=', '11')
        ->where('cabang', '=', 'tomo')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->get();
        //sosial umum
        // dd($sut);

          $sup = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as sup')
        ->where('kode_gol', '=', '11')
        ->where('cabang', '=', 'paseh')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->get();
        //sosial umum
        // dd($sup);



          $sk = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as sk')
        ->where('kode_gol', '=', '12')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->pluck('sk');
        //sosial khusus
        // dd($sk);

         //berdasarkan gol rtB paseh Tomo Cimanggugn
         $rtbc = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as rtbc')
        ->where('kode_gol', '=', '22')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->get();
        //rt.B
        // dd($rtbc);
         $rtbt = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as rtbt')
        ->where('kode_gol', '=', '22')
        ->where('cabang', '=', 'tomo')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->get();

         $rtbp = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as rtbp')
        ->where('kode_gol', '=', '22')
        ->where('cabang', '=', 'paseh')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->get();

         $pemerintah = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as pemerintah')
        ->where('kode_gol', '=', '23')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->pluck('pemerintah');
        //pemerintah
        // dd($pemerintah);

          $rtc = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as rtc')
        ->where('kode_gol', '=', '28')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->pluck('rtc');
        //rt C
        // dd($rtc);

         $rtd = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as rtd')
        ->where('kode_gol', '=', '29')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->pluck('rtd');
        //rt D
        // dd($rtd);

         $nk = DB::table('tbl_drd')
        ->selectRaw('count(kode_gol) as nk')
        ->where('kode_gol', '=', '31')
        ->where('cabang', '=', 'cimanggung')
        ->groupBy('bulan')
        // ->groupBy('kode_gol')
        ->orderBy('bulan', 'asc')
        ->pluck('nk');
        //niaga kecil
        // dd($nk);
        $totm3 = DB::table('tbl_drd')
        ->selectRaw('sum(pakai) as pk')
        ->groupBy('cabang')
          ->orderBy('cabang', 'asc')
         ->get();
        // dd($totm3);

//  $data = DB::table('tbl_drd')
//                 ->select([
//                         DB::raw('count(harga_air) as `value`'), 
//                         DB::raw('MONTH(created_at) as a')
//                         ])->groupBy('a')
//                         ->where('created_at', '>=', Carbon::now()->subDays(1))
//                         ->get();

// foreach($data as $entry) {

//     $output[$entry->value] = $entry->a;
// }


            return view('v_chart', compact('x','total','totalp','totalt','datat','datac','datap','totp','tott','totc','totalsatu','totaldua','totaltiga','suc','sup','sut','rtbc','rtbp','rtbt','sumc','sumt','sump','totm3'));
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