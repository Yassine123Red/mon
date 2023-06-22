<?php 

include "../connect.php"; 

$alldata = array() ; 


$alldata['status'] = "success" ; 


$langen = getAllData("users" , null , null , false )  ;


$alldata['langen'] = $langen ; 
// $langfr = getAllData("usersviewlang" , "usersContry_id = 4" , null , false )  ;
// $alldata['langfr'] = $langfr ; 
 
echo json_encode($alldata) ;



