<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User; 
class FisicaController extends Controller
{
    public function index(){

        $users = User::all();

        return view('nav.fisica')->with('users', $users); 
    }
}
