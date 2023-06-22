<?php 

include "../connect.php"; 

$alldata = array() ; 

$alldata['status'] = "success" ; 

$langen = getAllData("activeprof" , "contry_id = 5  AND prof_active = 1 "  , null , false )  ;



$alldata['langen'] = $langen ; 

$langfr = getAllData("activeprof" , "contry_id = 4  AND prof_active = 1" , null , false )  ;
$alldata['langfr'] = $langfr ; 

echo json_encode($alldata) ;