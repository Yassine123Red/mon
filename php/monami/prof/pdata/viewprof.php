<?php


include "../../connect.php";

$id = filterRequest("id");


getAllData("prof", "prof_id = $id");