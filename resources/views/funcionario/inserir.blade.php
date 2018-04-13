<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<h1 class="mt-2">Inserir Novo Funcionario</h1>
@if(!empty($mensagem))
    <div class="alert alert-success">Funcionario inserido com sucesso!</div>
@endif

<div class="container">


    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:8000/">Pagina Inicial</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/produtos/pesquisar">Pesquisar Funcionarios</a>
        </li>


<h1>
</h1>


    <form action="/produtos/inserir" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token()}}}">
        <div class="form-group">
            <label for="descricao">Nome Completo: <span class="text-danger">*</span></label>
            <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="quantidade">Telefone: <span class="text-danger">*</span></label>
            <input type="number" id="quantidade" name="quantidade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="valor">Salario: <span class="text-danger">*</span></label>
            <input type="number" id="valor" name="valor" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="funcao">Função: <span class="text-danger">*</span></label>
            <input type="text" id="funcao" name="funcao" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="data_vencimento">Data de Contratação: </label>
            <input type="date" id="data_vencimento" name="data_vencimento" class="form-control">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Inserir Funcionario">
    </form>
</div>




</body>
</html>