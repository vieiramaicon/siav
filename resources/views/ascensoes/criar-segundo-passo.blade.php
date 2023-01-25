<form action="{{ route('ascensoes.criar.segundo.passo.post') }}" method="post">
    @csrf

    <table>
        <thead>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>CH</th>
                <th>Arquivo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->carga_horaria }}</td>
                    <td>
                        <a href="{{ route('cursos.download', $curso->id) }}">Baixar</a>
                    </td>
                </tr>
            @endforeach
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
