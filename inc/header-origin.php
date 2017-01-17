<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sistema Motor Show</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/manuntencao.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script type="text/javascript" src="js/filtro.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/validacoes.js"></script>
    <script type="text/javascript" src="js/mascaras.js" ></script>

    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="<?php BASEURL;?>/img/logos/algoritech-fundo-transp.png"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a id="a-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Usuário <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASEURL; ?>visitantes">Gerenciar Visitantes</a></li>
                        <li><a href="<?php echo BASEURL; ?>visitantes/add.php">Novo Visitante</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="a-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Cargo do Contato <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASEURL; ?>expositores">Gerenciar Expositores</a></li>
                        <li><a href="<?php echo BASEURL; ?>expositores/add.php">Novo Expositor</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="a-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Categoria do Cliente <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASEURL; ?>relatorio/index.php">Monitor dos Registros</a></li>
                        <li><a href="<?php echo BASEURL; ?>relatorio/geracaoRelatorioVisitantesPDF.php">Gerar Relatório - Visitante</a></li>
                        <li><a href="<?php echo BASEURL; ?>relatorio/geracaoRelatorioExpositoresPDF.php">Gerar Relatório - Expositor</a></li>
                        <li><a href="<?php echo BASEURL; ?>relatorio/geracaoRelatorioCheckinsPDF.php">Gerar Relatório - Check-in</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="a-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Relatórios <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASEURL; ?>expositores">Gerenciar Expositores</a></li>
                        <li><a href="<?php echo BASEURL; ?>expositores/add.php">Novo Expositor</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#">Evento - HAIRNOR</a>
                </li>


                <a id="links" href="logout.php" class="navbar-brand" style="background-color: red">
                    <div class="col-xs-12 text-center">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </div>
                </a>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<main class="container">