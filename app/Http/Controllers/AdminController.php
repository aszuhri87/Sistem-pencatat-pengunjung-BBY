<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use App\Pengunjung;
use App\Http\Controllers\Session;
use Excel;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Exports\PengunjungExport;
class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('auth/login');
    }

    // public function dashboard(Request $requestuest){
    //     $pengunjung = Pengunjung::all();

    //     return view('admin/admin',['pengunjung' => $pengunjung]);
    // }

    public function dashboard(Request $request){



        $method = $request->method();

        if ($request->isMethod('POST'))
        {
            $from = $request->input('from');
            $to   = $request->input('to');
            $nama = $request->input('nama');
            if ($request->has('search'))
            {
                // select search
                // $search = DB::table("SELECT * FROM pengunjung INNER JOIN asal ON asal.id=pengunjung.asal_id INNER JOIN
                // pegawai ON pegawai.id=pengunjung.pegawai_id WHERE pengunjung.created_at BETWEEN '$from' AND '$to'");
                $search = Pengunjung::with('asal','pegawai')
                ->whereBetween('pengunjung.created_at',[$from,$to])
                ->select('*')
                ->get();



                return view('admin/admin',['pengunjung' => $search]);
            }


                elseif($request->has('exportExcel')){

                // select Excel
                $nama_file = 'laporan_pengunjung_'.date($from).'_sampai_'.date($to).'.xlsx';
                return Excel::download(new PengunjungExport($from, $to), $nama_file);
                }

                elseif($request->has('cari')){

                    $cari=Pengunjung::where('nama_pengunjung','LIKE','%'.$nama.'%')->get();
                    return view('admin/admin',['pengunjung' => $cari]);

                }

        }
            else
        {
            //select all
            $pengunjung = Pengunjung::with('asal','pegawai')->latest()
            ->select('*')
            ->paginate(10);;
            return view('admin/admin',['pengunjung' => $pengunjung]);
        }


        // $pengunjung = Pengunjung::all();


        // return view('admin/admin', ['pengunjung' => $pengunjung]);

}




}
