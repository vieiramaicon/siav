<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    public function create() {
        return view('ascensoes.criar-curso');
    }

    public function store(Request $request) {
        $ascensao = session('ascensao');

        $data = $request->collect()->all();
        
        $data['ascensao_id'] = $ascensao->id;
        
        $data['arquivo'] = $request->file('arquivo')->get();

        // dd($data);
        
        $curso = Curso::create($data);

        return redirect()->route('ascensoes.criar.segundo.passo');
    }
}
