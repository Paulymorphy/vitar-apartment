<?php

function processImageUpload($files,$fieldName){
    $target_dir = "assets/uploads/";
    $fileExtensions = ['jpeg','jpg','png'];

    $fileName = $_FILES[$fieldName]['name'];
    $fileSize = $_FILES[$fieldName]['size'];
    $fileTmpName  = $_FILES[$fieldName]['tmp_name'];
    $fileType = $_FILES[$fieldName]['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $target_dir . uniqid() . $fileExtensions;
    $errors = []; 

    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            return $uploadPath;
        } else {
            return false;
        }
    } else {
        foreach ($errors as $error) {
            return $errors;
        }
    }
}