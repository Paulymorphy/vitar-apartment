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
    $filepath = [];
    if($_FILES['rentalImages']['name'][0] != ""){
        $files = reArrayFiles($_FILES['rentalImages']);
        foreach($files as $file){
            $newFilePath = processImageUpload($file);
            $filepath[] = $newFilePath;
        }
    }

    $strPath = implode(';',$filepath);

    $data = array(
        'id'=>$_POST['id'],
        'rent'=>$_POST['rate'],
        'description'=>implode(';',$_POST['desc']),
        'path'=> $strPath,
        'status'=> ''
    );

    $res = edit_rentable($data);
    if($res == true){
        echo json_encode((object)array('success'=>true, 'detail'=>'Successfully Modify'));
    }else{
        echo json_encode((object)array('success'=>false, 'detail'=>$res));
    }
}else if(isset($_POST['deleteRentable'])){
    if(isset($_POST['id'])){
        $data = array(
            'id'=>$_POST['id'],
            'rent'=>'',
            'description'=>'',
            'path'=>'',
            'status'=>'0'
        );
    
        $res = edit_rentable($data);
        if($res == true){
            echo json_encode((object)array('success'=>true, 'detail'=>'Successfully Remove'));
        }else{
            echo json_encode((object)array('success'=>false, 'detail'=>$res));
        }
    }
}else{
    if(isset($_GET['id'])){
        $data = get_rental_by_id($_GET['id']);
        if($data != false){
            echo json_encode((object)array('success'=>true, 'data'=>$data));
        }else{
            echo json_encode((object)array('success'=>false, 'detail'=>'Error on getting data'));
        }
    }
}