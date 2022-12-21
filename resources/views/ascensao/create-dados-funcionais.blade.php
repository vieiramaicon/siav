<form action="{{ route('ascensao.create.dados.funcionais') }}" method="post">
    @csrf
    Funcionais
    <button type="submit">Próximo</button>
</form>