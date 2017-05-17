<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Empresas(){
        return $this-> belongsTo('App\Empresa');
    }

    public function Lugares(){
        return $this-> belongsToMany('App\Lugar','lugares_usuarios','user_id', 'lugar_id' );
        
        // belongsToMany('modelo', 'tabla mediadora', 'campo_id', 'otro_campo_id')
    }

}
