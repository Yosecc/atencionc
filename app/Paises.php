<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
     protected $table = 'paises';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','descripcion'];
    protected $guarded  = ['codigo'];

}
