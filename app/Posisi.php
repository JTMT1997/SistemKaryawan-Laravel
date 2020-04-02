<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posisi extends Model
{
    use SoftDeletes;
    
    protected $fillable=['pendidikan_id', 'jabatan','gaji','slug'];
    protected $table='posisi';
  
   
    public function poskar(){
        return $this->hasMany(Karyawan::class, 'posisi_id','id');
    }
    public function pospend(){
        return $this->belongsTo(Pendidikan::class,'pendidikan_id','id');
    }
}
    