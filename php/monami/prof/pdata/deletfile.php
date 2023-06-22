<?php

include "../../connect.php";


$id = filterRequest("id");

$imagename = filterRequest("usersimage");

deleteFile("../../upload/items", $imagename);

deleteData("prof", "prof_id = $id");