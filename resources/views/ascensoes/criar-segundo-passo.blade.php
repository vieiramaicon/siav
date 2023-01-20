<form action="{{ route('ascensoes.criar.segundo.passo.post') }}" method="post">
    @csrf
    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CH</th>
                <th>Arquivo</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>

    <div>
        <a href="{{ route('ascensoes.cursos.criar') }}" style="text-decoration:none">
            <button type="button">Novo Curso</button>
        </a>
    </div>

    <div>
        <a href="{{ route('ascensoes.criar.primeiro.passo') }}" style="text-decoration:none">
            <button type="button">Voltar</button>
        </a>

        <button type="submit">Próximo</button>
    </div>
</form>
