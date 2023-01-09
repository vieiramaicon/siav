<form action="{{ route('ascensao.criar.segundo.passo.post') }}" method="post">
    @csrf
    Segundo passo

    <div>
        <a href="{{ route('ascensao.criar.primeiro.passo') }}">
            <button type="button">Voltar</button>
        </a>

        <button type="submit">Próximo</button>
    </div>
</form>
