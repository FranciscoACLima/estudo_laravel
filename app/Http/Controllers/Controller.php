<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $msg = 'Home Page';
        return view('welcome', ['title' => $msg]);
    }

    public function cadastrar()
    {
        echo 'Tela de cadastro do usuário';
    }

    public function fazerLogin()
    {
        echo 'Tela de login do usuário';
    }
}
