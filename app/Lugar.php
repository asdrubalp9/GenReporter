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
        
        return $this-> belongsToMany('App\User','lugares_usuarios');
    }
}
