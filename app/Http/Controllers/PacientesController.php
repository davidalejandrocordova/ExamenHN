<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function Patologica(){
        return view('examen_biopsia');
    }
    public function Cervical(){
        return view('examen_cervical');
    }
}
