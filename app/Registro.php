<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registro';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','email','id_estado','id_municipio','id_pais','profesion','edad','hijos','padres','abuelos','otros','pareja','cne','sso','tiempo','asiste','servicio_consulado','profesion','id_estado_pais','ci'];
    protected $guarded  = ['cedula'];
}
