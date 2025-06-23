<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <label>Nome</label>
            <input type="text"
                   name="nome" 
                   id="nome"
                   value="{{ isset($registro->nome) ? $registro->nome : ''}}">
        </div>
        <div>
        <label>Apelido</label>
            <input type="text"
                   name="apelido" 
                   id="apelido"
                   value="{{ isset($registro->apelido) ? $registro->apelido : ''}}">
        </div>
        <div>
        <label>Cidade</label>
            <input type="text"
                   name="cidade" 
                   id="cidade"
                   value="{{ isset($registro->cidade) ? $registro->cidade : ''}}">
        </div>
        <div>
        <label>Bairro</label>
            <input type="text"
                   name="bairro" 
                   id="bairro"
                   value="{{ isset($registro->bairro) ? $registro->nome : ''}}">
        </div>
        <div>
        <label>Cep</label>
            <input type="text"
                   name="cep" 
                   id="cep"
                   value="{{ isset($registro->cep) ? $registro->cep : ''}}">
        </div>
        <div>
        <label>Email</label>
            <input type="text"
                   name="email" 
                   id="email"
                   value="{{ isset($registro->email) ? $registro->email : ''}}">
        </div>
        <div>
        <label>Telefone</label>
            <input type="text"
                   name="telefone" 
                   id="telefone"
                   value="{{ isset($registro->telefone) ? $registro->telefone : ''}}">
        </div>
    </div>

</body>
</html>