<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function show() // Con esto estamos inyectando el Foro completo
    {
        return view('grade.detail');
    }
}
