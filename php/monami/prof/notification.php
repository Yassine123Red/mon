<?php 

include "connect.php"  ;
//  getAllData("profview" , "category_id = $categoryid")  ;
$userid = filterRequest("id");


    $stmt = $con->prepare("SELECT * FROM `users` WHERE `users_not` = 1  and `id` = $userid");
    

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}


