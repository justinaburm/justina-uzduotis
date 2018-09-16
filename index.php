<?php

$user = "root";
$password = "root";
$database = "nfq";

$db = new mysqli('localhost', $user, $password, $database);


// Nustatome koduote
$db->set_charset("utf8");



?>
