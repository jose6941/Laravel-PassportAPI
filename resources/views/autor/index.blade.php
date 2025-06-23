<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Inclusão de um novo autor</h1>
     <div>
        <!--  -->
        <table>
            <tr>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Cliente</th>
                <th>Bairro</th>
                <th>Cep</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
            <tbody>
                @foreach($registros as $registro)
                 <tr>
                    <td>{{ $registro->nome}}</td>
                    <td>{{ $registro->apelido}}</td>
                    <td>{{ $registro->cidade}}</td>
                    <td>{{ $registro->bairro}}</td>
                    <td>{{ $registro->cep}}</td>
                    <td>{{ $registro->email}}</td>
                    <td>{{ $registro->telefone}}</td>
                    <td>
                        <a href="{{ url('/autor/edit', $registro->id)}}">Alteração</a>
                        <a href="{{ url('/autor/destroy', $registro->id)}}">Exclusão</a>
                        <a href="{{ url('/autor/show', $registro->id)}}">Consulta</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/autor/create')}}"></a>
     </div>
</body>
</html>