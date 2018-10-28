<?php
require_once('../model/registration.php');

if(isset($_POST['signup'])){
    $res = registerTenant($_POST);
    if($res == true){
        header('location: ../index.php?reg=true');
    }else{
        header('location: ../index.php?res=false&detail=error: invalid keycode');
    }
}