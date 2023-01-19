<?php

namespace App\Http\Controllers;

use App\Models\Ascensao;
use App\Models\TipoAscensao;
use Illuminate\Http\Request;

class AscensaoController extends Controller
{
    public function index()
    {
        return view('ascensoes.index');
    }

    public function criarPrimeiroPasso(Request $request)
    {
        $ascensao = new Ascensao();
        $ascensao->save();
        
        session(['ascensao' => $ascensao]);
        
        $tiposAscensoes = TipoAscensao::get();

        return view('ascensoes.criar-primeiro-passo', [ 'tiposAscensoes' => $tiposAscensoes]);
    }

    public function criarPrimeiroPassoPost(Request $request)
    {   
        $ascensao = session('ascensao');
        
        $ascensao->telefone = $request->telefone;

        $tipoAscensao = TipoAscensao::where('codigo', $request->tipoAscensao)->first();
        $ascensao->tipo_ascensao_id = $tipoAscensao->id;

        $ascensao->save();        
    
        return to_route('ascensoes.criar.segundo.passo');
    }

    public function criarSegundoPasso(Request $request)
    {
        return view('ascensoes.criar-segundo-passo');
    }

    public function criarSegundoPassoPost(Request $request)
    {
        $ascensao = session('ascensao');
        
        return to_route('ascensoes.criar.terceiro.passo');
    }

    public function criarTerceiroPasso(Request $request)
    {
        return view('ascensoes.criar-terceiro-passo');
    }

    public function criarTerceiroPassoPost(Request $request)
    {
        return 'Finalizou';
    }
}
