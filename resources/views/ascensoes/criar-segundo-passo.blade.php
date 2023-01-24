<div>
    @foreach ($cursos as $curso)
        <form action="{{ route('ascensoes.cursos.downloading.post') }}" method="post" id="form_arquivo_{{ $curso->id }}">
            @csrf
            <input type="number" name="curso_id" value="{{ $curso->id }}" readonly hidden>
        </form>
    @endforeach

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
                            <div>
                                <button type="submit" form="form_arquivo_{{ $curso->id }}" formtarget="_blank">Baixar</button>
                            </div>
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
</div>
