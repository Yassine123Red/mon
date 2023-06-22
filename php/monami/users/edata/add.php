<?php

include "../../connect.php";

$name        =  filterRequest("name") ;
$desc        =  filterRequest("desc") ;
$category    =  filterRequest("category") ;
$contry      =  filterRequest("contry") ;
$age         =  filterRequest("age") ;
$userid      =  filterRequest("id") ;


$stmt = $con->prepare("
INSERT INTO `edata`(`edata_name` , `edata_desc` , `edata_users` , `edata_category` , `edata_contry` , `edata_age` ) 
VALUES (? , ? , ? , ? , ? , ?) 
") ;

$stmt->execute(array($name , $desc , $userid ,$category , $contry , $age)) ;

$count = $stmt->rowCount() ;

if ($count > 0) {
    echo json_encode(array("status" => "success" )) ;
} else {
    echo json_encode(array("status" => "fail" )) ;
}

?> 