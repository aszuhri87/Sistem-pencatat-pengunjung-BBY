<?php

namespace App\Http\Controllers;

use App\Pegawai;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request  $request){

        $method = $request->method();
        $nama=$request->nama;
        if($request->has('cari')){

                $cari=Pegawai::where('nama_pegawai','LIKE','%'.$nama.'%')->get();
                return view('pegawai/admin_pegawai',['pegawai' => $cari]);


        }
        else

       $pegawai =  Pegawai::where('id','>',0)->paginate(10);

        return view('pegawai/admin_pegawai', ['pegawai' => $pegawai]);

    }
    public function tambah()
    {
          $pegawai = Pegawai::all(['id','nip']);

         return view('pegawai/pegawai_input', ['pegawai' => $pegawai]);

    }

    public function store(Request $request)
    {


    $pegawai = new Pegawai;

    $pegawai->nama_pegawai=$request->nama_pegawai;
    $pegawai->nip=$request->nip;
    $pegawai->bidang=$request->bidang;
    $pegawai->save();

    $request->session()->flash('status', 'Berhasil Menyimpan!');
    // return redirect('pegawai/admin_pegawai');
    return redirect('data_pegawai');

    }

    public function show($id){

    }

    public function edit(Pegawai $pegawai)
    {

    return view('pegawai/pegawai_edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request, Pegawai $pegawai)
    {


    $pegawai->nama_pegawai=$request->nama_pegawai;
    $pegawai->nip=$request->nip;
    $pegawai->bidang=$request->bidang;
    $pegawai->push();

     $request->session()->flash('status', 'Berhasil mengedit data');
    // return redirect('pegawai/admin_pegawai');

    return redirect('data_pegawai');

    }

    // public function status_edit(Pegawai $pegawai)
    // {

    // return view('pegawai/status_edit', ['pegawai' => $pegawai]);
    // }

    // public function update_sts(Request $request, Pegawai $pegawai)
    // {


    // $pegawai->nama_pegawai=$request->nama_pegawai;
    // $pegawai->nip=$request->nip;
    // $pegawai->push();

    // $request->session()->flash('status', 'Berhasil mengedit data');
    // return redirect('pegawai/admin_pegawai');
    // }


    public function delete(Request $request,$id)
    {
    $pegawai = Pegawai::find($id);

    $pegawai->nama_pegawai=$request->nama_pegawai;
    $pegawai->nip=$request->nip;

    $pegawai->delete();

    $request->session()->flash('status', 'Berhasil menonaktifkan pegawai!');
    // return redirect('pegawai/admin_pegawai');

    return redirect('data_pegawai');
    }

    public function trash()
    {
        $pegawai = Pegawai::onlyTrashed()->get();
        return view('/pegawai/trash',['pegawai'=>$pegawai]);
    }

    public function restore($id)
    {
            $pegawai = Pegawai::onlyTrashed()->where('id',$id);
            $pegawai->restore();


            return redirect('pegawai_trash');

    }



    public function cari_non(Request  $request){
        $method = $request->method();
        $nama=$request->nama;
        if($request->has('cari')){

                $cari=Pegawai::where('nama_pegawai','LIKE','%'.$nama.'%')->onlyTrashed()->get();
                return view('pegawai/trash',['pegawai' => $cari]);


        }
        else

       $pegawai =  Pegawai::where('id','>',0)->paginate(10);

        return view('pegawai/trash', ['pegawai' => $pegawai]);
    }



}
