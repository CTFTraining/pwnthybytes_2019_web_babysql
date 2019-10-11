<?php

$servername = $_ENV["DB_HOST"];
$username = $_ENV["DB_USER"];
$password = $_ENV["DB_PASSWORD"];
$dbname = $_ENV["DB_NAME"];

$con = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO `flag_tbl` (secret) SELECT '" . file_get_contents("/flag") . "' FROM DUAL WHERE NOT EXISTS(SELECT secret FROM flag_tbl);";
$result = $con->query($sql);


