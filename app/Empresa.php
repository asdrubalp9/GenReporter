<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Empresa extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $guard = 'empresa';
    //
    
    public function Lugar(){
        return $this->hasMany('App\Lugar');
    }
    public function User(){
        return $this->hasMany('App\User');
    }
    /*
    public function Tipo_Reportes(){
        return $this->hasMany('App\Tipo_Reportes');
    }
    // */
}
