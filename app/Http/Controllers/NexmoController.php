<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Nexmo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengunjung;
class NexmoController extends Controller
{
    public function show(){
        return view('nexmo');
    }

    public function verify(Request $request){
        $this->validate($request,[
            'code'=>'size:4'
        ]);

        try {

        $request_id=session('nexmo_request_id');
        $verification=new \Nexmo\Verify\Verification($request_id);

        Nexmo::verify()->check($verification,$request->code);

         $date=date_create();
    
}
    catch (Nexmo\Client\Exception\Request $e) {
        return redirect()->back()->withErrors([
            'code' => $e->getMessage()
        ]);
        return redirect('/pengunjung/tambah')->with('status', 'Code salah atau menggunakan nomor yang sama lebih dari 3 kali, cobalah menunggu beberapa menit!');

    }
    }
}
