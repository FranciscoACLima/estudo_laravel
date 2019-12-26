<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use \Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    protected $repository;
    protected $validator;
    
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function index()
    {
        $user = Auth::user();
        //dump($user->email) and die();
        return 'OK logado: ' . $user->email;
    }

    public function auth(Request $request)
    {
        $credentials = [
            'email' => $request->get('username'),
            'password' => $request->get('password'),
        ];
        try {
            if (Auth::attempt($credentials)) {
                return redirect()->route('user.dashboard');
            } else {
                return 'Erro na autenticação';
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        dump($request->all()) and die();
        echo 'funcionei';
    }
}
