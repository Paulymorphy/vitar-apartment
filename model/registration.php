<?php
require_once('../core/db.php');

function registerTenant($data){
    //VALIDATIONS
    $unitID = verifyKeyCode($data['keycode']);
    if($unitID == false) return "Invalid Keycode";
    $accDetail = array('username'=>$data['email'],'password'=>$data['pass']);
    $accID = addAccount($accDetail);
    if($accID == false) return "Information Error";

    $dataIn = array(
        'fullname'=>($data['firstname'] . "_" . $data['middlename'] . "_" . $data['lastname']),
        'bday'=>$data['bday'],
        'email'=>$data['email'],
        'contact'=>$data['Contact_Number'],
        'occupation'=>$data['Occupation'],
        'accID'=>$accID,
        'unit'=>$unitID,
    );

    $res = addTenant($dataIn);
    $res1 = disableKeyCode($data['keycode']);
    return $res;
}

function addTenant($data){
    $sql = "INSERT INTO tenant(fullname,birthdate,email,contact,occupation,account,unitID) VALUES(:param1,:param2,:param3,:param4,:param5,:param6,:param7)";
    $data = array($data['fullname'],$data['bday'],$data['email'],$data['contact'],$data['occupation'],$data['accID'],$data['unit']);
    $stm = prepareStatement($sql,$data);
    if($stm->execute()){
        return db()->lastInsertId();
    }else{
        return false;
    }
}

function addAccount($data){
    // $sql = "CALL addAccount(:param1,:param2,2)";
    $sql = "INSERT INTO sys_Account(username,password,userType) VALUES(:param1,SHA1(:param2),2)";
    $stm = prepareStatement($sql, array($data['username'],$data['password']));
    if($stm->execute()){
        return db()->lastInsertId();
    }else{
        return false;
    }
}

function verifyKeyCode($key){
    $sql = "SELECT * FROM unit_keycode WHERE keycode = :param1";
    $stm = prepareStatement($sql, array($key));
    if($stm->execute()){
        if($stm->rowCount() > 0){
            $keycode = $stm->fetch();
            return $keycode['status'] == 1 ? $keycode['unitID'] : false;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function disableKeyCode($key){
    $sql = "UPDATE unit_keycode SET status = 2 WHERE keycode = :param1";
    $stm = prepareStatement($sql,array($key));
    if($stm->execute()){
        return true;
    }else{
        return false;
    }
}