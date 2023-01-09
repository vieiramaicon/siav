<form action="{{ route('ascensao.criar.primeiro.passo.post') }}" method="post">
    @csrf
    <div>
        <label for="nome">Telefone</label>
        <input type="tel" id="telefone" name="telefone" pattern="\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}"
            title="(XX) XXXXX-XXXX">
    </div>

    <div>
        <label for=""></label>
        <select name="tipo">
            <option value="asc01">Progressão</option>
            <option value="asc02">Promoção</option>
            <option value="asc03">Promoção - Mérito e Titulação</option>
        </select>
    </div>

    <button type="submit">Próximo</button>
</form>
