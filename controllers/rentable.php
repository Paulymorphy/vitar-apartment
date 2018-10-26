<?php
require_once('../model/maintenance.php');
require_once('../core/fileUpload.php');

if(isset($_POST['addRentable'])){

    $filepath = processImageUpload($_FILES);

    if($filepath == false){
        echo json_encode((object)array('success'=>false, 'detail'=>'No image uploaded'));
        return; 
    }else if(is_array($filepath)){
        echo json_encode((object)array('success'=>false, 'detail'=>$filepath));
        return;
    }

    $data = (object)array(
        'rent'=>$_POST['rent'],
        'type'=>$_POST['type'],
        'description'=>$_POST['desc'],
        'path'=>$filepath
    );

    $res = add_rentable($data);
    if($res == true){
        echo json_encode((object)array('success'=>true, 'detail'=>'Successfully Added'));
    }else{
        echo json_encode((object)array('success'=>false, 'detail'=>$res));
    }
}else if(isset($_POST['editRentable'])){

}else if(isset($_POST['deleteRentable'])){

}else{

}