<?php

require_once('../config.php');
require_once(DBAPI);

$usuario = null;

$db = open_database();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_completo = $_POST['nome_completo'];
    $login_email = $_POST['login_email'];
    $email_confirma = $_POST['email_confirma'];
    $senha = $_POST['senha'];
    $senhaConfirma = $_POST['senha_confirma'];

    $resultado = validarEmails($login_email, $email_confirma);

    if ($resultado == 0) {
        $usuario['login_email'] = $login_email;
    }

    $resultado = validarSenhas($senha, $senhaConfirma);

    if ($resultado == 0) {
        $usuario['nome_completo'] = $nome_completo;
        $usuario['senha'] = $senha;
        $today =
            date_create('now', new DateTimeZone('America/Recife'));

        $usuario['modified'] = $usuario['created'] = $today->format("Y-m-d H:i:s");
        var_dump($usuario);
        save('usuarios', $usuario);
        echo "<script>alert(" . json_encode($_SESSION['message']) . ")</script>";
    }

    header('location: ../index.php');
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