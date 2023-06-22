<?php

include "../../connect.php";

$profid = filterRequest("id");

$data = array(
  "prof_active"  => 0 
);

updateData("prof" , $data , "prof_id = $profid  AND prof_active = 1 ");
