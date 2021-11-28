<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asal;
class AsalController extends Controller
{
    public function index(){



        $asal =  Asal::where('id','>',0)->paginate(3);

         return view('admin/admin_asal', ['asal' => $asal]);

     }

     public function show($id){

     }

     public function delete(Request $request,$id)
     {
     $asal = Asal::find($id);

     $asal->nama_tempat=$request->nama_tempat;
     $asal->alamat=$request->alamat;


     $asal->delete();

     $request->session()->flash('status', 'Berhasil dihapus!');
     return redirect('admin/admin_asal');
     }

}
