<?php
/**
 * Created by PhpStorm.
 * User: andrealves
 * Date: 16/12/16
 * Time: 18:40
 */

require_once DBAPI;

session_start();

if ( ! isset( $_SESSION['myusername'] ) && ! isset( $_SESSION['mypassword'] ) ) {
    // Ação a ser executada: mata o script e manda uma mensagem
    header ('location: ../index.php');
    exit('Usuário não está logado');

} else {
    $tipoAcesso = $_SESSION['tipo_acesso'];

    if ($tipoAcesso == 0) {
        include (HEADER_TEMPLATE);
    } else {
        include (HEADER_VISITANTE);
    }
}

?>