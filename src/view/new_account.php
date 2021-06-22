<?php
require_once('../model/connection.php');

//session_start();
$email    =   filter_input(INPUT_POST,'emailcreate',FILTER_SANITIZE_STRING); 
$usuario  =   filter_input(INPUT_POST,'usercreate',FILTER_SANITIZE_STRING) ;
$senha    =   filter_input(INPUT_POST,'passcreate',FILTER_SANITIZE_STRING);

$QUERY  = "INSERT INTO CLIENTS_USERS_MANAGER (USER_NAME, EMAIL_CLIENT, PASS_CLIENTE) VALUES(:USER_PARAM, :EMAIL_PARAM, :PASS_PARAM)";
    
$INSERT_NEWUSER = $connection->prepare($QUERY);
$INSERT_NEWUSER->bindParam(':USER_PARAM',$usuario);
$INSERT_NEWUSER->bindParam(':EMAIL_PARAM',$email);
$INSERT_NEWUSER->bindParam(':PASS_PARAM',password_hash($senha,PASSWORD_DEFAULT));

$INSERT_NEWUSER-> execute();


if($INSERT_NEWUSER->rowCount() > 0){
    header('Location: ../../index.php');
    //enviar uma mensagem de sucesso para o login
}