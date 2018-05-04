<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>North Wind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/loja.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">North Wind</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="cadastro-funcionario-form.php">Cadastro de funcionário</a></li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Região<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastro-regiao-form.php">Cadastro Região</a></li>
                            <li><a href="lista-regiao.php">Listar Regiões</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Território<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastro-territorio-form.php">Cadastro Território</a></li>
                            <li><a href="lista-territorios.php">Listar Territórios</a></li>
                        </ul>
                    </li>
                    <li><a href="lista-funcionario.php">Lista de Funcionários</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="principal">