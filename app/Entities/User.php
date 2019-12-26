<?php

namespace App\Entities;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'users';

    /**
     * Os atributos que são atribuíveis em massa
     * 
     * Na criação do objeto passar estes atributos na forma
     * de lista
     *
     * @var array
     */
    protected $fillable = [
        'cpf', 'name', 'phone', 'birth', 'gender',
        'notes', 'email', 'password',
    ];

    /**
     * Atributos ocultos nos arrays de resultado das 
     * buscas no banco de dados
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   /*  protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 
    */
} 