<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function cadastrar()
{
   return view('sobre');

}

public function fazerlogin()
{
   return view('area');

}

public function fazercontato()
{
   return view('contato');

}


public function fazerformulario()
{
   return view('formulario');

}


}
