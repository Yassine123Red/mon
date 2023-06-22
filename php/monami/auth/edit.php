<?php

include "../connect.php";

$table = "users";
$id   = filterRequest("id");
$name   = filterRequest("username");
$age        = filterRequest("age");
$cuntry     = filterRequest("cuntry");
$desc     = filterRequest("desc");
// $res  = imageUpload("../upload" , "filse");
// $imageuplod = filterRequest("imageuplod");

  if($res == "empty" ){
    $data = array(
        "users_name"      =>      $name,
        "users_desc"      =>      $desc,
        "users_age"       =>     $age,
        "users_cuntry"    =>     $cuntry,
    );
  }else{
    // deleteFile("../upload"  , $imageuplod);
    $data = array(
        "users_name"      =>      $name,
        "users_desc"      =>      $desc,
        "users_age"       =>     $age,
        "users_cuntry"    =>     $cuntry,
        // "users_image"    =>     $res,
    );
  }
  updateData($table , $data , "id = $id");