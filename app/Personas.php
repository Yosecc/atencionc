<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
      protected $connection = 'dcomun';
    protected $table = 'saime';

    
    public function scopeCedula($query,$cedula)
    {
    	//dd("scope: ".$cedula);
    	$nac="V";
      $query ->where('nac','LIKE',$nac.'%')
               ->where('cedula','=',$cedula);
    }
}
