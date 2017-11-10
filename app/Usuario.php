<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    use Notifiable;
    protected $table = 'usuario';
    public $timestamps = false;

    protected  $fillable = [
        'nombres',
        'apellidos',
        'documento',
        'tipo_documento',
        'dirrecion',
        'telefono',
        'email',
        'usuario',
        'contrasena',
        'perfil'
        ];

}
