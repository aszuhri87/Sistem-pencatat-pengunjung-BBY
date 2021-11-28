<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class StatusController extends Controller
{
    public function index(){



        $pegawai =  Pegawai::where('id','>',0)->paginate(3);

         return view('pegawai/admin_pegawai', ['pegawai' => $pegawai]);

     }

    public function show($id){

    }

    public function status_edit(Pegawai $pegawai)
    {
   $pegawai  = Pegawai::all();

    return view('pegawai/status_edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request, Pegawai $pegawai)
    {

    $pegawai->status=$request->status;
    $pegawai->push();

    $request->session()->flash('status', 'Berhasil mengedit data');
    return redirect('pegawai/admin_pegawai');
    }
}
