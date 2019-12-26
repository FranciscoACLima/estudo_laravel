<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;

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
        return 'OK logado';
    }

    public function auth(Request $request)
    {
        $data = [
            'email' => $request->get('username'),
            'password' => $request->get('password'),
        ];
        try {
            \Auth::attempt($data, false);  //2º parametro manter conectado
            return redirect()->route('user.dashboard');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
        dd($request->all());
        dump and die();
        echo 'funcionei';
    }
}
