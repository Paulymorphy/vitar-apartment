<?php
require_once('../core/db.php');

#region get 
function get_all_user_account(){
    $sql = "SELECT * FROM sys_account acc, tenant t WHERE status > 0 AND acc.id = t.account AND userType = 2";
    $stm = prepareStatement($sql, array());
    $stm->execute();
    return $stm->fetchAll();
}

function get_all_commercial_rental(){
    $sql = "SELECT * FROM rentable WHERE status > 0 AND type = 'commercial'";
    $stm = prepareStatement($sql, array());
    $stm->execute();
    return $stm->fetchAll();
}

function get_all_parking_rental(){
    $sql = "SELECT * FROM rentable WHERE status > 0 AND type = 'parking'";
    $stm = prepareStatement($sql, array());
    $stm->execute();
    return $stm->fetchAll();
}

function get_all_residential_rental(){
    $sql = "SELECT * FROM rentable WHERE status > 0 AND type = 'residential'";
    $stm = prepareStatement($sql, array());
    $stm->execute();
    return $stm->fetchAll();
}

function get_rental_by_id($id){
    $sql = "SELECT * FROM rentable WHERE id = :param1";
    $stm = prepareStatement($sql, array($id));
    if($stm->execute()){
        return $stm->fetch();
    }else{
        return false;
    }
}

function get_tenant_by_accID($id){
    $sql = "SELECT * FROM tenant WHERE account = :param1";
    $stm = prepareStatement($sql, array($id));
    if($stm->execute()){
        return $stm->fetch();
    }else{
        return false;
    }
}
#endregion 

#region create
function add_rentable($data){
    $sql1 = "CALL addRentable(:param1,:param2,:param3, :param4)";
    $dataIn1 = array($data['rent'], $data['type'], $data['description'], $data['path']);
    $stm1 = prepareStatement($sql1, $dataIn1);
    return $stm1->execute();
}
#endregion

#region edit
function edit_rentable($data){
    $counter = 2;
    $sql1 = "UPDATE rentable SET ";
    $toEdit = [];
    $dataIn1 = array($data['id']);

    if($data['rent'] != ""){
        $toEdit[] = "montlyRate = :param" . $counter;
        $dataIn1[] = $data['rent'];
        $counter++;
    }

    if($data['description'] != ""){
        $toEdit[] = ("detailDesc = :param" . $counter);
        $dataIn1[] = $data['description'];
        $counter++;
    }

    if($data['path'] != ""){
        $toEdit[] = ("path = :param" . $counter);
        $dataIn1[] = $data['path'];
        $counter++;
    }
    
    if($data['status'] != ""){
        $toEdit[] = ("status = :param" . $counter);
        $dataIn1[] = $data['status'];
        $counter++;
    }

    $sql1 .= (implode(', ', $toEdit) . " WHERE id = :param1");
    $stm1 = prepareStatement($sql1, $dataIn1);
    return $stm1->execute();
}
#endregion