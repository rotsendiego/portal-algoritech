<?php
session_start();
require_once('../config.php');
require_once(DBAPI);

$usuario = null;

$db = open_database();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario['login_email'] = trim($_POST['login_email']);

    $retorn = verificaLoginExistente($usuario['login_email']);

    if ($retorn == false) {
        $usuario['nome_completo']  = $_POST['nome_completo'];

        $usuario['senha'] = $_POST['senha'];

        $today =
            date_create('now', new DateTimeZone('America/Recife'));

        $usuario['modified'] = $usuario['created'] = $today->format("Y-m-d H:i:s");

        save('usuarios', $usuario);
    } else {
        $_SESSION['message'] = "Login já existe no nosso Sistema. Tente outro e-mail!";
    }

}
header("Location: ../index.php");

function verificaLoginExistente($login) {
    $retorno = verificaLogin($login);

    return $retorno;
}

/*
 * Retorna > 0 se $str1 for maior que a $str2 e finalmente, retorna 0, se as duas strings forem iguais.
 * */
function validarEmails($email1, $email2)
{
    return strcmp($email1, $email2);
}

function validarSenhas($senha1, $senha2)
{
    return strcmp($senha1, $senha2);
}
