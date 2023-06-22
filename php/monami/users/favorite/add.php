<?php 

include "../../connect.php";


$usersid = filterRequest("usersid") ; 
$profid = filterRequest("profid") ; 


$data = array(
    "favorie_usersid"  =>   $usersid , 
    "favorie_profid"  =>   $profid , 
);


insertData("favorie" ,$data) ; 