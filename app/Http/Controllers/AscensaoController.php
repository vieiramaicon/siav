<?php

namespace App\Http\Controllers;

use App\Models\Ascensao;
use Illuminate\Http\Request;

class AscensaoController extends Controller
{
    public function index()
    {
        return view('ascensao.index');
    }

    public function criarPrimeiroPasso(Request $request)
    {
        $ascensao = new Ascensao();
        $ascensao->save();

        session(['ascensao' => $ascensao]);

        return view('ascensao.criar-primeiro-passo');
    }

    public function criarPrimeiroPassoPost(Request $request)
    {
        //dd($request->telefone);
    
        $ascensao = session('ascensao');
        $ascensao->telefone = $request->telefone;
        //$ascensao-> = $request->telefone;

        dd($ascensao);
    
        return to_route('ascensao.criar.segundo.passo');
    }

    public function criarSegundoPasso(Request $request)
    {
        return view('ascensao.criar-segundo-passo');
    }

    public function criarSegundoPassoPost(Request $request)
    {
        return to_route('ascensao.criar.terceiro.passo');
    }

    public function criarTerceiroPasso(Request $request)
    {
        return view('ascensao.criar-terceiro-passo');
    }

    public function criarTerceiroPassoPost(Request $request)
    {
        return 'Finalizou';
    }
}
