<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendidikan extends Model
{
    use SoftDeletes;
    protected $fillable=['pendidikan_terakhir'];
    protected $table='pendidikan';

    public function tokaryawan(){
        return $this->hasMany(Karyawan::class,'pendidikan_id','id');
    }

    // public function pendpos(){
    //     return $this->hasMany(Posisi::class, 'pendidikan_id','id');
    // }


}
