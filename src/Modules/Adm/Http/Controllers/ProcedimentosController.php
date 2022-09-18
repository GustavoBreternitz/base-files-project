<?php

namespace Modules\Adm\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Adm\Http\Requests\AddProcedimentosRequest;

class ProcedimentosController extends Controller
{
    public function index()
    {
        return view('adm::procedimentos.index');
    }

    public function add(AddProcedimentosRequest $request)
    {
        dd('adjasbhdO');
    }
}
