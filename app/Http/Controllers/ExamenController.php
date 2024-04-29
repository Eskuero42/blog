<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{

    public function index()
    {
        return view('examen');
    }

    public function Nombre(Request $request, $nombre)
    {
        return view('examen2', ['nombre' => $nombre]);
    }
}