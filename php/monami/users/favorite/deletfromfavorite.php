<?php 

include "../../connect.php";

$id = filterRequest("id");  

deleteData("favorie" , "favorie_id = $id"); 