<form action="{{ route('ascensao.criar.terceiro.passo.post') }}" method="post">
    @csrf
    Terceiro passo

    <div>
        <a href="{{ route('ascensao.criar.segundo.passo') }}">
            <button type="button">Voltar</button>
        </a>

        <button type="submit">Finalizar</button>
    </div>
</form>
