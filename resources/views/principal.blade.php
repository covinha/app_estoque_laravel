<?php $titulo = ''; ?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo; ?></title>
    <link href="../../css/app.css" rel="stylesheet">
    <link rel="text/javascript" href="/js-app.js">
    <script lang="text/javascript" src="js/app.js"></script>


</head>



<body>






<div class="container" >

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Controle seus Funcionarios</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:8000/">Pagina Inicial</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/produtos/inserir">Inserir Funcionarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/produtos/pesquisar">Pesquisar Funcionarios</a>
        </li>


    </ul>





    <section class="container">
        @yield('miolo')
    </section>

</div>



</body>
</html>