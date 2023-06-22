<?php

include "../../connect.php";

$profid  = filterRequest("profid");
$profname  = filterRequest("profname");
$usersid = filterRequest("id");

$data = array(
  "prof_notification"  => 1 
);

updateData("prof" , $data , "prof_id = $profid  AND prof_notification = 0 ");
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 

insertNotifyprof("profname$profname" , "ffffffff" , $profid ,  "prof$profid" , "none" , "none" );