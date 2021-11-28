<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengunjung extends Model
{
    use SoftDeletes;

    public $incrementing=false;
    protected $table='Pengunjung';
    protected $dates=['deleted_at','phone_verified_at'];
    protected $fillable = ['id','asal_id','pegawai_id', 'nama_pengunjung','no_hp','keperluan', 'status'];

    public function Pegawai(){
        //tanda bahwa tabel user punya relasi One dg tabel alamat
        return $this->belongsTo('App\Pegawai','pegawai_id')->withTrashed();
    }

    public function Asal(){
        //tanda bahwa tabel user punya relasi One dg tabel alamat
        return $this->belongsTo('App\Asal','asal_id')->withTrashed();
    }

    public function getCreatedAtAttribute($created_at)
{
    \Carbon\Carbon::setLocale('id');
    return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $created_at)
       ->format('d-M-Y');

}

public function getUpdatedAtAttribute()
{
    return \Carbon\Carbon::parse($this->attributes['updated_at'])
       ->diffForHumans();
}
}
