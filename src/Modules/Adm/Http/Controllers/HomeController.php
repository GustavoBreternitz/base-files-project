<?php

namespace Modules\Adm\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('adm::home.index');
    }

    public function login()
    {
        return view('adm::home.login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            $request->session()->regenerate();

            return redirect()->intended('adm.list.home');
        }

        return back()->withErrors([
            'email' => 'Não foi possivel realizar o seu login, por favor revise os dados e tente novamente.',
        ]);
    }
}
