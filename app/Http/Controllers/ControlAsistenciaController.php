<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlAsistenciaController extends Controller
{
    public function create(){
        return view ('control.asistencias');
    }

    public function store(Request $request)
    {

    }
}
