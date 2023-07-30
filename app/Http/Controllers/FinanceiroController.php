<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FinanceiroController extends Controller
{
    public function index()
    {
        $quantidadeClientes = User::count();
        return view('nav.financeiro', ['quantidadeClientes' => $quantidadeClientes]);
    }
}
