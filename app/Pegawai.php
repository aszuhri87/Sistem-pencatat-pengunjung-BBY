<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pegawai extends Model
{
    use SoftDeletes;
    protected $table='pegawai';
    protected $date='deleted_at';
    protected $fillable=['pegawai_id','nama_pegawai','nip','bidang'];

    public function Pengunjung(){
        //tanda bahwa tabel user punya relasi One dg tabel alamat
        return $this->hasOne(Pengunjung::class,'id','id')->withTrashed();
    }
}
