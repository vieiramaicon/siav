<form action="{{ route('ascensoes.cursos.criar.post') }}" method="post">
    @csrf
    

    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>

    <div>
        <label for="area">Área</label>
        <input type="text" name="area" id="area">
    </div>

    <div>
        <label for="carga_horaria">CH</label>
        <input type="text" name="carga_horaria" id="carga_horaria">
    </div>

    <div>
        <label for="instituicao">Instituição</label>
        <input type="text" name="instituicao" id="instituicao">
    </div>

    <div>
        <label for="data_inicio">Data incial</label>
        <input type="date" name="data_inicio">
    </div>

    <div>
        <label for="data_fim">Data final</label>
        <input type="date" name="data_fim">
    </div>
    
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>