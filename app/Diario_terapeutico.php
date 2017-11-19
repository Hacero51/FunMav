<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Diario_terapeutico extends Model
{
    use Notifiable;
    protected $table = 'diario_terapeutico';
    public $timestamps = false;

    protected  $fillable = [

    ];
}
