<?php
session_start();
require_once('../config.php');
require_once(DBAPI);

$usuario = null;


$db = open_database();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['username']);
    $pass = $_POST['password'];

    $contaValida = validarUsuarioExistente($login, $pass);

    if ($contaValida != null) {
//        var_dump($contaValida);
        $_SESSION['message'] = "Seja Bem-Vindo ao Portal, " . $contaValida['login_email'] . "!";
        header("Location: ../inicial.php");
    } else {
        $_SESSION['message'] = "Usuário ou Senha esta(ao) incorreto(s)!";
        header("Location: ../index.php");
    }
}

function validarUsuarioExistente($login, $pass) {
    return verificaUsuarioExiste($login,$pass);
}