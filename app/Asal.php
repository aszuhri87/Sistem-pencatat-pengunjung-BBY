<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asal extends Model
{
    use SoftDeletes;
    protected $table='asal';
    protected $dates=['deleted_at'];
    protected $fillable=['nama_tempat','alamat'];

    public function Pengunjung(){
        //tanda bahwa tabel user punya relasi One dg tabel alamat
        return $this->hasOne('App\Pengunjung','id','asal_id');
    }

    public static function boot() {
        parent::boot();

        self::deleting(function($asal) { // before delete() method call this

            $asal->pengunjung()->each(function($pengunjung){
            $pengunjung->delete();
            });
             // do the rest of the cleanup...
        });

        self::restoring(function($asal){
            $asal->pengunjung()->each(function($pengunjung){
            $pengunjung->withTrashed()->where('deleted_at', '>=', $$asal->deleted_at)->restore();});
        });


        self::forceDeleted(function($asal){
            $asal->pengunjung()->each(function($pengunjung){
            $pengunjung->withTrashed()->where('deleted_at', '>=', $$asal->deleted_at)->forceDelete();});
        });
    }
}
