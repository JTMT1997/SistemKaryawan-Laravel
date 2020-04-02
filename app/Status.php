<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;
    
    protected $fillable=['nama_status','slug'];
    protected $table='status';
  
   

    public function statkar(){
        return $this->hasMany(Karyawan::class, 'status_id','id');
    }
}
