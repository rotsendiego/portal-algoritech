<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link href='css/login.css' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">

    <style>
        .form.input {
            margin-bottom: 5px;
        }

    </style>
</head>

<?php
    session_start();
    if (isset($_SESSION['message'])) {
      if ($_SESSION['message'] != null) {
          print '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
          $_SESSION['message'] = null;
      }
    }

?>

<div style="padding-top: 4%">

</div>
<div class="image-login">
    <img style="padding-right: 4%" height="320" width="300" src="img/logos/algoritech-fundo-transp.png">
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
<!--            <h2 class="text-center login-title">Bem Vindo Ao nosso Portal</h2>-->
<!--            <div class="account-wall">-->

                <br>
                <form class="form-signin" id="formLogin" method="post" action="controllers/loginController.php">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Login (E-mail)" required autofocus style="margin-bottom: 10px;" />
                    <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required style="margin-bottom: 10px;" />
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="lembrarSenha" />
                            Lembrar Senha
                        </label>
                    </div>
                    <button class="btn btn-lg btn-success btn-block" type="button" onclick="validarCampos();" style="width: 300px; height: 40px;">
                        Entrar
                    </button>
                </form>
                <form class="form-signin" id="formCadastro" method="post" action="controllers/cadastroController.php">
                    <h2>Criar uma nova conta</h2>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required style="margin-bottom: 10px;" />
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Login (E-mail)" required style="margin-bottom: 10px;" />
                        <input type="text" id="email_confirma" name="email_confirma" class="form-control" placeholder="Confirmar Login (E-mail)" required style="margin-bottom: 10px;" />
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required style="margin-bottom: 10px;" />
                    <input type="password" id="senha_confirma" name="senha_confirma" class="form-control" placeholder="Confirmar Senha" required style="margin-bottom: 10px;" />
                        <input type="hidden" id="tipo_acesso" name="tipo_acesso" class="form-control" />

                    <br>
                    <br>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="checkTermos" id="checkTermos" name="usuario['check_termos']"/>
                            Sim, eu concordo com os <a href="#"><b>Termos de uso</b>.</a>
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="validarCheck();" style="width: 300px; height: 40px;">
                        Cadastrar
                    </button>
                </form>

<!--            </div>-->
<!--            <a href="portal-algoritech/precadastro.php" class="text-center new-account">Crie um cadastro</a>-->
        </div>
    </div>
</div>

<script>
    function validarCheck() {
        var marcouTermo = document.getElementById("checkTermos").checked;
        var nome = document.getElementById("nome").value;
        var login = document.getElementById("email").value;
        var email_confirma = document.getElementById("email_confirma").value;
        var senha = document.getElementById("senha").value;
        var senha_confirma = document.getElementById("senha_confirma").value;

        if (marcouTermo && nome!="" && login!="" && senha!="" && email_confirma!="" && senha_confirma!="") {
            document.getElementById('formCadastro').submit();
        } else if (nome=="" || login=="" || senha=="" || email_confirma=="" || senha_confirma==""){
            alert("Favor preencher os campos em branco!");
        } else {
            alert("Para realizar o cadastro, favor concordar com os Termos de uso.");
        }
    }

    function validarCampos() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if (username != "" && password!= "") {
            document.getElementById('formLogin').submit();
        } else {
            alert("Favor preencher os campos Login / Senha.");
        }
    }
</script>