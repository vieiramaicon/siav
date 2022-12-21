<form action="{{ route('ascensao.create.dados.gerais') }}" method="post">
    @csrf
    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name ="nome" >
    </div>
    
    <div>
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name ="cpf" pattern="[0-9]{11}" minlength="11" maxlength="11" >
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name ="email" >
    </div>
    <div>
        <label for="nome">Telefone</label>
        <input type="tel" id="telefone" name ="telefone" pattern="\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}" title="(XX) XXXXX-XXXX">
    </div>
    
    <button type="submit">Próximo</button>
</form>