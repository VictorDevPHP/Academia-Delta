<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use app\Models\User; 

class MatematicaController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('nav.matematica')->with('users', $users);
    }
}
