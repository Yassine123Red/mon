<?php

include "../../connect.php";

$profid = filterRequest("id");
$username   = filterRequest("username");
$age        = filterRequest("age");
$cuntry     = filterRequest("cuntry");
$desc     = filterRequest("desc");
$imageiplod     = filterRequest("image");

$res = imageUpload("../../upload/items","files")

if($res == "empty"){
$data = array(
  "prof_name"      =>      $username,
  "prof_age"      =>      $age,
  "prof_cuntry"    =>     $cuntry,
  "prof_desc"    =>     $desc,
);

}else{
deleteFile("../../upload/items", $imagename);

    $data = array(
        "prof_name"      =>      $username,
        "prof_age"      =>      $age,
        "prof_cuntry"    =>     $cuntry,
        "prof_desc"    =>     $desc,
        "prof_image"    =>     $res,
      );
}
updateData("prof" , $data , "prof_id = $profid ");



