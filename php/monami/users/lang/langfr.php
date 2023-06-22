<?php

include "../../connect.php";
// $contryid = filterRequest("id");
 getAllData("activeprof" , "contry_id = 4")  ;
// $userid = filterRequest("id");
   

//     $stmt = $con->prepare("SELECT activeprof.  * , 1 as favorie FROM activeprof 
//     INNER JOIN favorie ON favorie.favorie_profid = activeprof.prof_id AND favorie.favorie_usersid = $userid
//     WHERE contry_id = 4 
//     UNION ALL 
//     SELECT *  , 0 as favorie  FROM activeprof
//     WHERE  contry_id = 4 AND prof_id NOT IN  ( SELECT activeprof.prof_id FROM activeprof 
//     INNER JOIN favorie ON favorie.favorie_profid = activeprof.prof_id AND favorie.favorie_usersid =  $userid)");
    
// $stmt->execute();
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $count  = $stmt->rowCount();

// if ($count > 0) {
//     echo json_encode(array("status" => "success", "data" => $data));
// } else {
//     echo json_encode(array("status" => "failure"));
// }


