<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    //
    protected $table = 'reportes';

    public function Lugares(){
        return $this-> belongsTo('App\Lugar','lugar_id');
    }
    public function tipoReporte(){
        return $this-> belongsTo('App\TipoReporte','tipo_reporte_id');
    }
}
