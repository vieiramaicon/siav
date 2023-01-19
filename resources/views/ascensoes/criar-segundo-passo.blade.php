<form action="{{ route('ascensoes.criar.segundo.passo.post') }}" method="post">
    @csrf
    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Carga-Horária</th>
                <th>Arquivo</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>

    <div>
        <a href="{{ route('ascensoes.cursos.criar') }}">
            <button type="button">Novo Curso</button>
        </a>
    </div>

    <div>
        <a href="{{ route('ascensoes.criar.primeiro.passo') }}">
            <button type="button">Voltar</button>
        </a>

        <button type="submit">Próximo</button>
    </div>
</form>
