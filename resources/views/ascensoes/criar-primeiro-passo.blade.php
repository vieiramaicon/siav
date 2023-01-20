<form action="{{ route('ascensoes.criar.primeiro.passo.post') }}" method="post">
    @csrf

    <div>
        <!-- pattern="\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}" -->
        <label for="nome">Telefone</label>
        <input type="tel" id="telefone" name="telefone" value="{{ $ascensao->telefone }}">
    </div>

    <div>
        <label for=""></label>
        <select name="tipo_ascensao">
            @foreach ($tiposAscensoes as $tipoAscensao)
                <option value="{{ $tipoAscensao->codigo }}" @selected($tipoAscensao->id == $ascensao->tipo_ascensao_id)>{{ $tipoAscensao->nome }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button type="submit">Próximo</button>
    </div>
</form>
