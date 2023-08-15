<?php

namespace App\Http\Resources\Asistencia;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AsistenciaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idControl' => $this->id_control,
            'numeroEmpleado' => $this->numero_empleado,
            'fechaRegistro' => $this->fechaFormatter,
        ];
    }
}
