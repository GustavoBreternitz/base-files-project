<?php

namespace Modules\Adm\Http\Controllers;

use Illuminate\Routing\Controller;

class AgendaController extends Controller
{
    public function __construct() 
    {

    }

    public function index()
    {
        return view('adm::agenda.index');
    }
}
