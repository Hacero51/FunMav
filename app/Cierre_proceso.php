<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Cierre_proceso extends Model
{
    use Notifiable;
    protected $table = 'cierre_proceso';
    public $timestamps = false;

    protected  $fillable = [

    ];
}
