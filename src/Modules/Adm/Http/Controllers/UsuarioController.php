<?php

namespace Modules\Adm\Http\Controllers;

use Illuminate\Routing\Controller;

class UsuarioController extends Controller
{
    public function __construct() 
    {

    }

    public function index()
    {
        return view('adm::usuario.index');
    }
}
