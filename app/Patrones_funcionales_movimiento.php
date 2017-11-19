<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Patrones_funcionales_movimiento extends Model
{
    use Notifiable;
    protected $table = 'patrones_funcionales_movimiento';
    public $timestamps = false;

    protected  $fillable = [

    ];
}
