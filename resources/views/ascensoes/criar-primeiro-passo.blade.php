<form action="{{ route('ascensoes.criar.primeiro.passo.post') }}" method="post">
    @csrf

    <div>
        <label for="nome">Telefone</label>
        <input type="tel" id="telefone" name="telefone" pattern="\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}"
            title="(XX) XXXXX-XXXX">
    </div>

    <div>
        <label for=""></label>
        <select name="tipoAscensao">
            @foreach ($tiposAscensoes as $tipoAscensao)
                <option value="{{ $tipoAscensao->codigo }}">{{ $tipoAscensao->nome }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button type="submit">Próximo</button>
    </div>
</form>
