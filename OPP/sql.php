<?php
require('DB.php');
$db = new DB();
$students = $db->select('students');
var_dump($students);
?>