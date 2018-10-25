<?php
session_start();
require_once('../core/auth.php');

if(isset($_POST['login'])){
    $uname = $_POST['email'];
    $password = $_POST['password'];

    $user = login($uname, $password);

    if($user != false){
        $_SESSION['user'] = $user;
        if($user['userType'] == 1){
            $_SESSION['adminLoggedIn'] = true;
        }
        echo json_encode((object)array('success'=>true, 'userType'=>$user['userType']));
    }else{
        echo json_encode((object)array('success'=>false, 'detail'=>'Invalid Email/Password'));
    }
}