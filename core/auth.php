<?php
require_once('db.php');

$accTable = "sys_account";

function login($user, $pass){
    global $accTable;
    $sql = "SELECT * FROM " . $accTable . " WHERE username = :param1 AND password = SHA1(:param2)";
    $data = array($user, $pass);
    $stm = prepareStatement($sql, $data);
    $stm->execute();
    $row = $stm->fetch();

    if($stm->rowCount() > 0){
        return $row;
    }else{
        return false;
    }
}