<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosPaises extends Model
{
     protected $table = 'estados_paises';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo_pais','ciudad'];
    protected $guarded  = ['codigo_pais'];
}
