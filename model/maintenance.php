<?php

function get_all_user_account(){
    $sql = "SELECT * FROM sys_account acc, tenant t WHERE acc.id = t.account AND userType = 2";
    $stm = prepareStatement($sql, array());
    $stm->execute();
    return $stm->fetchAll();
}

function get_all_commercial_rental(){
    $sql = "SELECT * FROM rentable WHERE type = 'commercial'";
    $stm = prepareStatement($sql, array());
    $stm->execute();
    return $stm->fetchAll();
}

function get_all_parking_rental(){
    $sql = "SELECT * FROM rentable WHERE type = 'parking'";
    $stm = prepareStatement($sql, array());
    $stm->execute();
    return $stm->fetchAll();
}

function get_all_residential_rental(){
    $sql = "SELECT * FROM rentable WHERE type = 'residential'";
    $stm = prepareStatement($sql, array());
    $stm->execute();
    return $stm->fetchAll();
}
