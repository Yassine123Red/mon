<?php

include "../../connect.php";
// $contryid = filterRequest("id");
 getAllData("activeprof" , "contry_id = 5")  ;
//  $userid = filterRequest("id");
                                        
//     $stmt = $con->prepare("SELECT usersviewlang.  * , 1 as favorie FROM usersviewlang 
//     INNER JOIN favorie ON favorie.favorie_usersid = usersviewlang.users_id AND favorie.favorie_usersid = $userid
//     WHERE contryUsers_id = 1
//     UNION ALL 
//     SELECT *  , 0 as favorie  FROM usersviewlang
//     WHERE  contryUsers_id = 1 AND users_id NOT IN  ( SELECT usersviewlang.users_id FROM usersviewlang 
//     INNER JOIN favorie ON favorie.favorie_usersid = usersviewlang.users_id AND favorie.favorie_usersid =  $userid)");

// $stmt->execute();
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $count  = $stmt->rowCount();

// if ($count > 0) {
//     echo json_encode(array("status" => "success", "data" => $data));
// } else {
//     echo json_encode(array("status" => "failure"));
// }


