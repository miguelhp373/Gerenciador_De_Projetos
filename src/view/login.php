<?php

require_once('../model/connection.php');

session_start();

try {
    $_SESSION['USER'] = filter_input(INPUT_POST, 'userlogin', FILTER_SANITIZE_STRING);
    $_SESSION['PASS'] =   filter_input(INPUT_POST, 'passlogin', FILTER_SANITIZE_STRING);

    $QUERY = "SELECT USER_NAME, PASS_CLIENTE FROM CLIENTS_USERS_MANAGER WHERE USER_NAME = :user LIMIT 1";

    $EXECQUERY = $connection->prepare($QUERY);
    $EXECQUERY->bindParam(':user', $_SESSION['USER']);

    $EXECQUERY->execute();
} catch (PDOException $error) {

    echo $error->getMessage();
    die;
}



    if ($EXECQUERY->rowCount() > 0) {

        $row = $EXECQUERY->fetch();

        if (password_verify($_SESSION['PASS'], $row["PASS_CLIENTE"])) {
            echo 'tudo ok';
        } else {
            echo 'Senha Incorreta';
             //enviar uma mensagem de erro pro login
        }
    } else {
        echo 'Usuário Não encontrado';
        //enviar uma mensagem de erro pro login
    }
