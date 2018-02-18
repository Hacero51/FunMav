<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Paciente extends Model
{
    use Notifiable;
    protected $table = 'paciente';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $dates = ['foto'];

    protected  $fillable = [
        'nombres',
        'apellidos',
        'documento',
        'tipo_documento',
        'procedencia',
        'fecha_nacimiento',
        'fecha_ingreso',
        'edad',
        'estado_civil',
        'hijos',
        'alias',
        'estudio',
        'genero',
        'rh',
        'senales',
        'foto',
        'usuario_id',
        'eps_id',
        'ubicacion_id',
        'acudiente_id'
    ];

    public function setFotoAttribute($foto){
        $name = Carbon::now()->second.$foto->getClientOriginalName();
        $this->attributes['foto'] = $name;
        \Storage::disk('local')->put($name, \File::get($foto));
    }


}
