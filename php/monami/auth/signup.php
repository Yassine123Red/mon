<?php

include "../connect.php";
$table = "users";
$username   = filterRequest("name");
$password   = sha1($_POST['password']);
$email      = filterRequest("email");
$age        = filterRequest("age");
$cuntry     = filterRequest("cuntry");
$verfiycode = rand(10000 , 99999);
$res  = imageUpload("../upload" , "filse");

$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? OR users_name = ? ");
$stmt->execute(array($email, $username));
$count = $stmt->rowCount();
if ($count > 0) {
  printSuccess();
} else {

    $data = array(
        "users_name"      =>      $username,
        "users_email"     =>      $email,
        "users_age"       =>     $age,
        "users_password"  =>     $password,
        "users_verfiycode"=>     $verfiycode,
        "users_cuntry"    =>     $cuntry,
        "users_image"     =>     $res,
    );
    sendEmail($email , "Verfiy Code Raja Shop " , "Verfiy Code $verfiycode");
    insertData($table , $data) ; 
}

?>
