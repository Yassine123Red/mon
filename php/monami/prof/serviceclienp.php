<?php

include "../connect.php";

$body   = filterRequest("body");
$profid   = filterRequest("id");

    $stmt  = $con->prepare("INSERT INTO  `serviceprof`( `service_body`, `service_profid`)
     VALUES (? , ?)");

    $stmt->execute(array($body, $profid));

    $count  = $stmt->rowCount();

    if ($count > 0) {
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "failure"));
    }