<?php

require_once 'DB_Functions.php';

$db = new DB_Functions();

$fname = $_POST["fname"];

$number = $_POST["number"];

$status = $db->Callreviewlist($fname);

echo json_encode($status);

?>
