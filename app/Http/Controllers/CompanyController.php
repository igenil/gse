<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show() // Con esto estamos inyectando el Foro completo
    {
        return view('company.detail');
    }
}
