<?php

function processImageUpload($files){
    $target_dir = "../assets/uploads/";
    $fileExtensions = ['jpeg','jpg','png'];

    $fileName = $files['name'];
    $fileSize = $files['size'];
    $fileTmpName  = $files['tmp_name'];
    $fileType = $files['type'];

    $tempExt = explode('.',$fileName);
    $fileExtension = strtolower(end($tempExt));

    $uploadPath = $target_dir . uniqid() . "." . $fileExtension;
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

function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}