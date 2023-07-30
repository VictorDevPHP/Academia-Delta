<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function index()
    {
        return view('nav.financeiro')->extends('home'); 
    }
}
