<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetitionController extends Controller
{
    public function show() // Con esto estamos inyectando el Foro completo
    {
        return view('petition.detail');
    }
}
