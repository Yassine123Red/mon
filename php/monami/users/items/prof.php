<?php

include "../../connect.php";
$categoryid = filterRequest("id");
//  getAllData("profview" , "category_id = $categoryid")  ;
$userid = filterRequest("usersid");


    $stmt = $con->prepare("SELECT profview.* , 1 as favorie FROM profview 
    INNER JOIN favorie ON favorie.favorie_profid = profview.prof_id AND favorie.favorie_usersid = $userid
    WHERE category_id = $categoryid
    UNION ALL 
    SELECT *  , 0 as favorie  FROM profview
    WHERE  category_id = $categoryid AND prof_id NOT IN  ( SELECT profview.prof_id FROM profview 
    INNER JOIN favorie ON favorie.favorie_profid = profview.prof_id AND favorie.favorie_usersid =  $userid)");
    

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}


