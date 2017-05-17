<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lugar extends Model
{
    //
     protected $table = 'lugares';

     public function Lugares(){
        return $this-> belongsTo('App\Empresa');
    }
    
    public function Users(){
        return $this-> hasMany('App\User','lugares_usuarios','lugar_id', 'user_id');
    }
    /*
    public function Reportes(){
        return $this-> hasOne('App\Reporte','lugar_id');
    }
    // */
}
