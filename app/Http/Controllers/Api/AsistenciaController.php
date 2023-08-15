<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Asistencia\AsistenciaResource;
use App\Models\ControlAsistencia;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AsistenciaController extends Controller
{
    public function store(Request $request)
    {
        $fecha =  Carbon::now('America/Mexico_City');
        $empleado = $request->all();
        $empleado['fecha'] = $fecha;

        if(isset($empleado)){
            $registro =  ControlAsistencia::create($empleado);

            return  AsistenciaResource::make($registro);

        }else{
            return [];
        }
    }



}
