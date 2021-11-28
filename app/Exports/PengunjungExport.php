<?php

namespace App\Exports;

use App\Pengunjung;
use App\Pegawai;
use App\Asal;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Ramsey\Collection\Map\MapInterface;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;

class PengunjungExport implements FromCollection,  WithMapping, WithHeadings, ShouldAutoSize
{

    use Exportable;

    public function __construct(String $from = null , String $to = null)
    {
        $this->from = $from;
        $this->to   = $to;
    }

    public function collection()
    {

       return Pengunjung::with('asal','pegawai')->where('created_at','>=',$this->from)->where('created_at','<=',$this->to)->select()->get();
    }



     //function select data from database


    public function map($pengunjung): array
    {
        return[
            $pengunjung->nama_pengunjung,
            $pengunjung->no_hp,
          $pengunjung->created_at,
            $pengunjung->keperluan,
              $pengunjung->asal->nama_tempat,
              $pengunjung->asal->alamat,
              $pengunjung->pegawai->nama_pegawai,
        ];
    }

    public function headings() : array {

        return [

           'Nama',

           'No Telepon',

           'Tanggal',

           'Keperluan',

           'Instansi',

           'Alamat',

           'Bertemu dengan'

        ] ;

    }
}


