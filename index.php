
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

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
<!--            <h2 class="text-center login-title">Bem Vindo Ao nosso Portal</h2>-->
            <div class="account-wall">
                <div class="image-login">
                    <img  height="320" width="300" src="img/algoritech_logo.jpeg">
                </div>
                <br>
                <form class="form-signin" id="formLogin">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Login (E-mail)" required autofocus />
                    <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required />
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="lembrarSenha" />
                            Lembrar Senha
                        </label>
                    </div>
                    <button class="btn btn-lg btn-success btn-block" type="submit" style="width: 300px; height: 40px;">
                        <label>Entrar</label>
                    </button>
                </form>
                <form class="form-signin" id="formCadastro">
                    <h2>Criar uma nova conta</h2>
                    <input type="text" id="nomeCompleto" name="nomeCompleto" class="form-control" placeholder="Nome Completo" />
                    <input type="text" id="loginEmail" name="loginEmail" class="form-control" placeholder="Login (E-mail)" />
                    <input type="text" id="loginEmailConf" name="loginEmailConf" class="form-control" placeholder="Confirmar Login (E-mail)" />
                    <input type="text" id="senha" name="senha" class="form-control" placeholder="Senha" />
                    <input type="text" id="senhaConf" name="senhaConf" class="form-control" placeholder="Confirmar Senha" />
                    <br>
                    <br>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="checkTermos" />
                            Sim, eu concordo com os <a href="#"><b>Termos de uso</b>.</a>
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 300px; height: 40px;">
                        <label>Cadastrar</label>
                    </button>
                </form>
            </div>
<!--            <a href="portal-algoritech/precadastro.php" class="text-center new-account">Crie um cadastro</a>-->
        </div>
    </div>
</div>