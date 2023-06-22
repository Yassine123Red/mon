<?php

include "../../connect.php";

$table = "edata";

$name        =  filterRequest("name") ;
$desc        =  filterRequest("desc") ;
$category    =  filterRequest("category") ;
$contry      =  filterRequest("contry") ;
$age         =  filterRequest("age") ;
$id      =  filterRequest("id") ;


    $data = array(
        "edata_name"      => $name
        "edata_desc"      => $desc
        "edata_category"  => $category
        "edata_contry"    => $contry
        "edata_age"       => $age
    );

    insertData($table , $data , "edata_users = $id");


?>
