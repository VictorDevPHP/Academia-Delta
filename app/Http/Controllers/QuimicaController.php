<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuimicaController extends Controller
{
    public function index(){

        return view('nav.quimica'); 
    }
}
