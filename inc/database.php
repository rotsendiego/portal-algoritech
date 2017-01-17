<?php
/**
 * Created by PhpStorm.
 * User: andre.luis.a.costa
 * Date: 30/11/2016
 * Time: 12:46
 */

mysqli_report(MYSQLI_REPORT_STRICT);
function open_database() {
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}
function close_database($conn) {
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
    return find($table);
}

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find( $table = null, $id = null ) {

    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;

            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $rows = array();

                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                $found = $rows;
                // echo json_encode($rows);
                // while ($found = $result->fetch_assoc()) {
                // }
                // $found = $result->fetch_all(MYSQLI_ASSOC); original
                // $found = $result->fetch_assoc(MYSQLI_ASSOC);
                // $found = $result->fetch_array(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    // var_dump($found);

    return $found;
}

/**
 *  Insere um registro no BD
 */
function save($table = null, $data = null) {

    try {
        $database = open_database();
        $columns = null;
        $values = null;
        //print_r($data);
        foreach ($data as $key => $value) {
            $columns .= trim($key, "'") . ",";
            $values .= "'$value',";
        }
        // remove a ultima virgula
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');

        $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

        $_SESSION['message'] = 'Registro cadastrado com sucesso.';
        $database->query($sql);
        $_SESSION['type'] = 'success';

    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

}

/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update($table = null, $id = 0, $data = null) {
    $database = open_database();
    $items = null;
    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }
    // remove a ultima virgula
    $items = rtrim($items, ',');
    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id=" . $id . ";";
    try {
        $database->query($sql);
        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove( $table = null, $id = null ) {
    $database = open_database();

    try {
        if ($id) {
            $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if ($result = $database->query($sql)) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

function verificaLogin($login) {
    $database = open_database();
    $existe = false;

    try {
        $sql = "SELECT * FROM usuarios WHERE login_email = '$login' ";

        $search = mysqli_query($database, $sql);

        if (isset($search)) {
            $row = mysqli_fetch_array($search,MYSQLI_ASSOC);
        }

//        var_dump($row);

        if(isset($row) > 0){
            $existe = true;
        }

    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $existe;

}

function verificaUsuarioExiste($login, $pass) {
    $database = open_database();

    try {
        $sql = "SELECT * FROM usuarios WHERE login_email = '$login' AND senha = '$pass'";

        $search = mysqli_query($database, $sql);

        if (isset($search)) {
            $row = mysqli_fetch_array($search,MYSQLI_ASSOC);
        }

    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $row;
}
