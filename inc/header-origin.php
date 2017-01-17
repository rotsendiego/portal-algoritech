<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Portal Alogritech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/portal-algoritech/css/manuntencao.css">
    <link rel="stylesheet" href="/portal-algoritech/css/bootstrap.min.css">

    <script type="text/javascript" src="/portal-algoritech/js/filtro.js"></script>
    <script type="text/javascript" src="/portal-algoritech/js/jquery-3.1.1.min.js"></script>
    <!-- <script type="text/javascript" src="/portal-algoritech/js/validacoes.js"></script> -->
    <!-- <script type="text/javascript" src="/portal-algoritech/js/mascaras.js" ></script> -->

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

         <img src="/portal-algoritech/img/logos/algoritech-menor.jpg" style="padding-top:6px;">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a id="a-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Usuário <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/portal-algoritech/visitantes">Gerenciar Usuários</a></li>
                    <li><a href="/portal-algoritech/visitantes/add.php">Novo Usuário</a></li>
                </ul>
            </li>
              <li class="dropdown">
                  <a id="a-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Cargo do Contato <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href="/portal-algoritech/expositores">1</a></li>
                      <li><a href="/portal-algoritech/expositores/add.php">2</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a id="a-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Categoria do Cliente <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href="/portal-algoritech/relatorio/index.php">1</a></li>
                      <li><a href="/portal-algoritech/relatorio/geracaoRelatorioVisitantesPDF.php">2</a></li>
                      <li><a href="/portal-algoritech/relatorio/geracaoRelatorioExpositoresPDF.php">3</a></li>
                      <li><a href="/portal-algoritech/relatorio/geracaoRelatorioCheckinsPDF.php">4</a></li>
                  </ul>
              </li>
              <a href="/portal-algoritech/inicial.php" class="navbar-brand">Evento - HAIRNOR</a>
               <a id="links" href="/portal-algoritech/logout.php" class="navbar-brand" style="background-color: red">
                   <div class="col-xs-12 text-center">
                       <i class="fa fa-sign-out" aria-hidden="true"></i>
                   </div>
               </a>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <main class="container">