<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Elequent\SoftDeletes;

class UserSocial extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'user_socials';

    /**
     * Os atributos que são atribuíveis em massa
     * 
     * Na criação do objeto passar estes atributos na forma
     * de lista
     *
     * @var array
     */
    protected $fillable = [
        'social_id', 'social_network', 'social_email', 
        'social_avatar',
    ];

    /**
     * Atributos ocultos nos arrays de resultado das 
     * buscas no banco de dados
     *
     * @var array
     */
    protected $hidden = [
    ];
}
