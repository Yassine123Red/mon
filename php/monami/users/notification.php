<?php 

include "../connect.php"; 

$alldata = array() ; 

$alldata['status'] = "success" ; 

$data = getAllData("prof" , "prof_notification = 1 " , null , false );

$alldata['data'] = $data ; 

echo json_encode($alldata) ;