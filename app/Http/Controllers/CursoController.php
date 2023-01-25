<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\StatusCurso;
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
        $data['status_curso_id'] = StatusCurso::getIdbyCodigo('st01');
        $data['arquivo'] = $request->file('arquivo')->get();
        
        $curso = Curso::create($data);

        return redirect()->route('ascensoes.criar.segundo.passo');
    }
    
}
