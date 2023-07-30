<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User; 
use Illuminate\Support\Facades\File;

class QuimicaController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('nav.quimica')->with('users', $users); 
    }
}
