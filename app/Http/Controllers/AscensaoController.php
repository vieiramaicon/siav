<?php

namespace App\Http\Controllers;

use App\Models\Ascensao;
use App\Models\Curso;
use App\Models\Intersticio;
use App\Models\StatusAscensao;
use App\Models\TipoAscensao;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AscensaoController extends Controller
{
    public function index()
    {
        return view('ascensoes.index');
    }

    public function criarPrimeiroPasso(Request $request)
    {
        $tiposAscensoes = TipoAscensao::get();

        $ano = Carbon::now()->format('Y');
        $data = Carbon::now()->format('Y-m-d');
        $intersticio = Intersticio::where('ano', $ano)->where('periodo_fim', '>=', $data)->first();
        
        $user_id = Auth::id();
        
        $status_ascensao_id = StatusAscensao::getIdbyCodigo('st01');
        
        $ascensao = Ascensao::where('user_id', $user_id)->where('intersticio_id', $intersticio->id)->first();

        if(!$ascensao)
        {
            $ascensao = Ascensao::create(['user_id' => $user_id, 'intersticio_id' => $intersticio->id, 'status_ascensao_id' => $status_ascensao_id]);
            $ascensao->save();
        }

        if($ascensao->status_ascensao_id != $status_ascensao_id) 
        {
            return redirect()->route('ascensoes.index');
        }

        session(['ascensao' => $ascensao]);
        
        return view('ascensoes.criar-primeiro-passo', [ 'tiposAscensoes' => $tiposAscensoes, 'ascensao' => $ascensao]);
    }

    public function criarPrimeiroPassoPost(Request $request)
    {   
        $ascensao = session('ascensao');

        $ascensao->telefone = $request->telefone;

        $tipoAscensao = TipoAscensao::where('codigo', $request->tipo_ascensao)->first();
        $ascensao->tipo_ascensao_id = $tipoAscensao->id;

        $ascensao->save();        
    
        return to_route('ascensoes.criar.segundo.passo');
    }

    public function criarSegundoPasso(Request $request)
    {
        $ascensao = session('ascensao');

        $cursos = Curso::where('ascensao_id', $ascensao->id)->get();

        return view('ascensoes.criar-segundo-passo', ['cursos' => $cursos]);
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
        $ascensao = session('ascensao');

        $ascensao->status_ascensao_id = StatusAscensao::getIdbyCodigo('st02');
        $ascensao->save();

        session()->forget('ascensao');

        return redirect()->route('ascensoes.index');
    }
}
