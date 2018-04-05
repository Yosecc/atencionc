<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'estados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_estado','estado'];
    protected $guarded  = ['id_estado'];


}
