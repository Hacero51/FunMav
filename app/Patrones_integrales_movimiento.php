<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Patrones_integrales_movimiento extends Model
{
    use Notifiable;
    protected $table = 'patrones_integrales_movimiento';
    public $timestamps = false;

    protected  $fillable = [

    ];
}
