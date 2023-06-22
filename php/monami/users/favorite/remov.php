<?php 

include "../../connect.php";

$usersid = filterRequest("usersid") ; 
$profid = filterRequest("profid") ; 

deleteData("favorie" , "favorie_usersid = $usersid AND favorie_profid = $profid") ; 