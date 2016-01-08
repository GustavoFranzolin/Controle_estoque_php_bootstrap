<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gustavo Franzolin">
    <meta name="author" content="Controle de estoque">

    <title>Controle de Estoque</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">Controle de Estoque</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Clientes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/cliente/cadastrar.php">Cadastrar Cliente</a></li>
                            <li><a href="/cliente/listar.php">Listar Clientes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Pedidos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/pedido/cadastrar.php">Cadastrar Pedidos</a></li>
                            <li><a href="/pedido/listar.php">Listar Pedidos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Produtos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/produto/cadastrar.php">Cadastrar Produto</a></li>
                            <li><a href="/produto/listar.php">Listar Produtos</a></li>
                        </ul>
                    </li>
                    <li><a href="/sobre.php">Sobre</a></li>
                </ul>
            </div>

            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
</div>