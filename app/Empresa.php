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
    
    public function User(){
        return $this-> belongsTo('App\User');
    }
    // */
}
