<?php

include "../../connect.php";

$msgerrour = array();

$table = "prof";
$prof = filterRequest("id");
$imagename = imageUpload("../../upload/items"  , "files");
  
    $data = array(
        "prof_image"    =>     $imagename,
      );

      insertData($table , $data);