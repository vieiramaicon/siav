<form action="/ascensao/create-dados-gerais" method="post">
    @csrf
    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name ="nome">
    </div>
    
    <div>
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name ="cpf" pattern="[0-9]{2}" minlength="9" maxlength="9">
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name ="email">
    </div>
    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name ="nome">
    </div>
    
    <button type="submit"></button>
</form>