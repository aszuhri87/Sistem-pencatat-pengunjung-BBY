<?php

namespace App\Http\Controllers;


use App\Pegawai;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Pengunjung;
use Excel;
use App\Exports\PengunjungExport;
use Alert;
use App\Http\Controllers\DB;
use App\Asal;
use Validator;
use Nexmo;


class PengunjungController extends Controller
{

    public function index(Request $req){



            $method = $req->method();

            if ($req->isMethod('post'))
            {
                $from = $req->input('from');
                $to   = $req->input('to');
                $nama = $req->input('nama');
                if ($req->has('search'))
                {
                    // select search
                    $search = DB::select("SELECT * FROM users WHERE email_verified_at BETWEEN '$from' AND '$to'");
                    return view('admin/admin',['ViewsPage' => $search]);
                }


                    elseif($req->has('exportExcel')){

                    // select Excel
                    return Excel::download(new PengunjungExport($from, $to), 'Excel-reports.xlsx');}

                    elseif($req->has('cari')){

                    $cari=Pengunjung::all()->where('nama_pengunjung',$nama);
                }
            }

                else
            {
                //select all
                $pengunjung = Pengunjung::orderBy('created_at','ASC')->get();
                  $pengunjung->pegawai()->withTrashed()->get();
                return view('admin/admin',['pengunjung' => $pengunjung]);
            }


            // $pengunjung = Pengunjung::all();


            // return view('pengunjung/daftar', ['pengunjung' => $pengunjung]);

    }
    public function tambah()
    {
        $pegawai = Pegawai::all(['id','nama_pegawai']);

            return view('pengunjung/tambah', ['pegawai' => $pegawai]);

    }

    public function store(Request $request)
    {

        $validator = $this->validator($request->all());

        if ($validator->fails())
        {
          return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors());
        }

        $asal = new Asal;

        $asal->nama_tempat = $request->nama_tempat;
        $asal->alamat = $request->alamat;
         $asal->save();

       $pegawai=new Pegawai;
       $pegawai->id=$request->id;

        $pengunjung = new Pengunjung;

        $pengunjung->nama_pengunjung = $request->nama_pengunjung;
        $pengunjung->no_hp = $request->no_hp;
        $pengunjung->keperluan = $request->keperluan;
        $pengunjung->asal_id=$asal->id;
        $pengunjung->pegawai_id=$request->pegawai_id;


        // $verification = Nexmo::verify()->start(
        //     ['number'=>$pengunjung->no_hp,
        //     'brand'=>'Verfikasi',
        //     ]
        // );
        // session(['nexmo_request_id'=>$verification->getRequestID()]);

        $pegawai->Pengunjung()->save($pengunjung);
        $asal->Pengunjung()->save($pengunjung);

        // return redirect('nexmo');
            return redirect()->back()
            ->with('status', 'Selamat datang! Selamat berkunjung!');
    }

    public function show($id){

    }

    public function edit(Pengunjung $pengunjung)

    {
      // $pengunjung = Pengunjung::find($id);
      $pegawai = Pegawai::all(['id','nama_pegawai']);
        return view('pengunjung/edit', ['pengunjung' => $pengunjung], ['pegawai'=>$pegawai]);
    }

    public function update(Request $request, Pengunjung $pengunjung)
    {

        $pengunjung->status=$request->status;
          $pengunjung->pegawai_id=$request->pegawai_id;
         $pengunjung->push();
         $request->session()->flash('status', 'Berhasil mengedit data!');
        return redirect('data_pengunjung');
    }

    public function delete(Request $request,$id)
    {
        $pengunjung = Pengunjung::with('asal')->find($id);


        $pengunjung->nama_pengunjung=$request->nama_pengunjung;
        $pengunjung->no_hp=$request->no_hp;
        $pengunjung->keperluan=$request->keperluan;
        $pengunjung->asal->nama_tempat=$request->nama_tempat;
        $pengunjung->asal->alamat=$request->alamat;
        $pengunjung->pegawai->nama_pegawai=$request->nama_pegawai;
        $pengunjung->asal()->delete();
        $pengunjung->delete();



     $request->session()->flash('status', 'Data berhasil dihapus!');

     return redirect('data_pengunjung');
    }

    // public function exportExcel(Request $request){
    //     $nama_file = 'laporan_pengunjung_'.date('Y-m-d_H-i-s').'.xlsx';
    //     return Excel::download(new PengunjungExport, $nama_file)
    //     ;

    // }

    public function trash()
    {
        $pengunjung = Pengunjung::with('asal')->onlyTrashed()->get();
        return view('/pengunjung/trash',['pengunjung'=>$pengunjung]);
    }

    public function trash_all(Request $request)

    {
        $pengunjung = Pengunjung::with('asal')->whereNotNull('id')->delete();
        $request->session()->flash('status', 'Data berhasil dipindah ke tong sampah!');
        return redirect('trash');
    }

    public function restore($id)
{
    	$pengunjung = Pengunjung::with('asal')->onlyTrashed()->where('id',$id);
        $pengunjung->restore();


    	return redirect('trash');
}

    public function balikan()
    {

            $pengunjung = Pengunjung::with('asal')->onlyTrashed();
            $pengunjung->restore();


            return redirect('trash');
    }

    public function hapus_permanen($id)
    {

            $pengunjung = Pengunjung::with('asal')->onlyTrashed()->where('id',$id);
            $pengunjung->forceDelete();



            return redirect('trash');
    }

    public function hapus_semua()
    {

            $pengunjung = Pengunjung::with('asal')->onlyTrashed();
            $pengunjung->forceDelete();



            return redirect('trash');
    }

    public function export_view(){
        $pengunjung = Pengunjung::all();
            return view('pengunjung/daftar', ['pengunjung' => $pengunjung]);
    }


    public function validator(array $data)
  {
    // custom error message for valid_captcha validation rule
    $messages  = [
      'valid_captcha' => 'Kode salah. Mohon isi dengan benar.'
    ];

    return Validator::make($data, [
      'nama_pengunjung' => 'required',
      'no_hp' => 'required',
      'keperluan' => 'required',
      'CaptchaCode' => 'required|valid_captcha'
    ], $messages);
  }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }


}
