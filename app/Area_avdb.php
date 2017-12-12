<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Area_avdb extends Model
{
    use Notifiable;
    protected $table = 'area_avdb';
    public $timestamps = false;

    protected  $fillable = [
        'alimentacion',
        'vestido',
        'higiene_mayor',
        'higiene_menor',
        'desplazamiento',
        'observacion'
    ];
}
