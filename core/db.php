<?php

$DBCon;

function db(){
    global $DBCon;
    $DBHost = "mysql:host=127.0.0.1;";
    $DBname = "dbname=apartment";
    $DBUsername = "root";
    $DBPassword = "";

    if(isset($DBCon)){
        return $DBCon;
    }else{
        $DBCon = new PDO($DBHost . " " . $DBname, $DBUsername, $DBPassword); 
        return $DBCon;
    }
}

function prepareStatement($query, $data){
    $con = db();
    $stm = $con->prepare($query);
    $index = 1;
    foreach ($data as $key) {
        $stm->bindParam(':param' . $index, $data[$index-1], gettype($key) == "integer" ? (PDO::PARAM_INT) : (PDO::PARAM_STR));
        $index++;
    }
    return $stm;
}