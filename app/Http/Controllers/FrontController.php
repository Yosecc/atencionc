<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function peticiones(){
    	return view('modules.peticiones');
    }
}
