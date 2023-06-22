<?php
include "../../connect.php";

$search  = filterRequest("search") ; 

getAllData("activeprof" , "prof_name LIKE '%$search%'");

?>