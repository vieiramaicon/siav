<form action="{{ route('ascensoes.criar.terceiro.passo.post') }}" method="post">
    @csrf
    Terceiro passo

    <div>
        <a href="{{ route('ascensoes.criar.segundo.passo') }}">
            <button type="button">Voltar</button>
        </a>

        <button type="submit">Finalizar</button>
    </div>
</form>
