<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
   use SoftDeletes;
   protected $fillable = ["status_id","pendidikan_id","posisi_id","nama","slug","alamat","umur","jenis_kelamin","email","no_telp","ttl","tgl_masuk"
];
    protected $table='datakaryawan';

    public function tojabatan(){
        return $this->belongsTo(Posisi::class, 'posisi_id','id');
    }

    public function tostatus(){
        return $this->belongsTo(Status::class, 'status_id','id');
    }

    public function backpend(){
        return $this->belongsTo(Pendidikan::class,'pendidikan_id','id');
    }

}
