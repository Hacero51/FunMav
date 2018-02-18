<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use Notifiable;
    protected $table = 'ubicacion';
    protected $primaryKey='id';
    public $timestamps = false;

    protected  $fillable = [
        'id','ciudad'
    ];
}
