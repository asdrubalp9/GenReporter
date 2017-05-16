<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    //
     protected $table = 'lugares';

     public function Lugar(){
        return $this-> belongsTo('App\Empresa');
    }
    public function User(){
        return $this-> belongsTo('App\User');
    }
}
