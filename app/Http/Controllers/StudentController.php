<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show() // Con esto estamos inyectando el Foro completo
    {
        return view('student.detail');
    }
}
