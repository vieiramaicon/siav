<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create() {
        return view('ascensoes.form-curso');
    }

    public function store(Request $request) {
        return redirect()->route('ascensoes.criar.segundo.passo');
    }
}
