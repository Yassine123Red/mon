<?php

include "connect.php";

$body   = filterRequest("body");
$usersid   = filterRequest("id");

    $stmt  = $con->prepare("INSERT INTO  `serviceclien`( `service_body`, `service_usersid`)
     VALUES (? , ?)");

    $stmt->execute(array($body, $usersid));

    $count  = $stmt->rowCount();

    if ($count > 0) {
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "failure"));
    }