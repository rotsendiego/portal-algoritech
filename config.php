<?php
/**
 * Created by PhpStorm.
 * User: andre.luis.a.costa
 * Date: 30/11/2016
 * Time: 12:46
 */

/** O nome do banco de dados*/
define('DB_NAME', 'gestor_eventos');
/** Usuário do banco de dados MySQL */
//define('DB_USER', 'gestor_eventos');
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
//define('DB_PASSWORD', 'sucesso123');
define('DB_PASSWORD', '');

/** nome do host do MySQL */
//define('DB_HOST', 'gestor_eventos.mysql.dbaas.com.br');
define('DB_HOST', 'localhost');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', '/portal-algoritech/');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('HEADER_VISITANTE', ABSPATH . 'inc/header-.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');