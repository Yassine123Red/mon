<?php


include "../../connect.php";

$id = filterRequest("id");


getAllData("myfavorie", "favorie_usersid = ?", array($id));