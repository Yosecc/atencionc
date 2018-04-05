<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
   protected $table = 'municipios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_municipio','municipio','id_estado'];
    protected $guarded  = ['id_municipio'];
}
