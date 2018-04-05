<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personas;
use App\Estados;
use App\EstadosPaises;
use App\Paises;
use App\Municipios;
use App\Registro;

class Contactocontroller extends Controller
{
    public function index()
    {
      return view('modules.frmregistro');

    }
}
