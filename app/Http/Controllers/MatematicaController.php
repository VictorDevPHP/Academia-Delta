<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MatematicaController extends Controller
{
    public function index()
    {
        return view('nav.matematica');
    }
}
