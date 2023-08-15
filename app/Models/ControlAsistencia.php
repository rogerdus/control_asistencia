<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class ControlAsistencia extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id_control';

    protected $fillable = [
        'nuc',
        'numero_empleado',
        'fecha',
        'latitud',
        'longitud',
    ];

    protected $dates = [
        'fecha',
        'created_at',
        'updated_at',

    ];

    protected $casts = [
        'fecha' => 'datetime:Y-m-d H:i:s',
    ];
    protected function getfechaFormatter(): Attribute
    {
        return $date = Carbon::createFromDate($this->date)->locale('es');
    }


    protected $table = 'control_asistencias';
}
