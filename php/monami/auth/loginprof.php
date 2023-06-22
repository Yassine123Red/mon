<?php

include "../connect.php";


$table = "prof";
$password = filterRequest("password");
$email = filterRequest("email"); 
// $stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? AND  users_password = ? AND users_approve = 1 ");
// $stmt->execute(array($email, $password));
// $count = $stmt->rowCount();
// result($count) ;
getData($table , "prof_email = ? AND prof_password = ?" , array($email , $password)) ; 