<?php
require_once('../model/maintenance.php');
require_once('../core/fileUpload.php');

if(isset($_POST['addRentable'])){
    if(!isset($_FILES['rentalImages'])){
        echo json_encode((object)array('success'=>false, 'detail'=>'No image uploaded'));
        return; 
    }

    $files = reArrayFiles($_FILES['rentalImages']);
    $filepath = array();
    foreach($files as $file){
        $newFilePath = processImageUpload($file);
        $filepath[] = $newFilePath;
    }

    $data = array(
        'rent'=>$_POST['rate'],
        'type'=>$_POST['type'],
        'description'=>implode(';',$_POST['desc']),
        'path'=>implode(';',$filepath)
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