<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/app.css" rel="stylesheet">



    <style>

        *{
            font-family: Arial; font-size: 20px;
        }

    </style>

    <title></title>
</head>
<body>
<div class="container">

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:8000/">Pagina Inicial</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/produtos/inserir">Inserir Funcionarios</a>
        </li>

        <h1>

        </h1>


    </ul>

    <h1 class="mt-2">Pesquisar Funcionarios</h1>

    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{$mensagem}}</div>
    @endif

    <form action="/produtos/pesquisar" method="post" class="form-inline mt-2">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <div class="form-group">
            <label for="descricao">Nome: </label>
            <input type="text" id="descricao" name="descricao" class="form-control ml-2">
        </div>
         <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">







        <!--comentario em html  -->
    </form>




@if(count($produtos) == 0)
    <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
@else
    <table class="table mt-2 text-center">
        <tr>
            <th>Id</th>
            <th class="text-left">Nome do Funcionario</th>
            <th>Telefone</th>
            <th>Salario</th>
            <th class="text-left">Função</th>
            <th>Data de Contratação</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td class="text-left">{{ $p->descricao }}</td>
                <td>{{$p->quantidade}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->funcao}}</td>
                <td>{{$p->data_vencimento }}</td>
                <td><a href="/produtos/excluir/{{$p->id}}"><button class="btn btn-danger">Excluir</button></a></td>
                <td><a href="/produtos/alterar/{{$p->id}}"><button class="btn btn-warning">Alterar</button></a></td>

            </tr>
        @endforeach
    </table>
@endif


</div>





</body>
</html>




