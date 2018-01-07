<?php
// $db = mysqli_connect('127.0.0.1', 'root', '', 'green_rock');
// if (mysqli_connect_errno()) {
// 	echo "database connection failed".mysqli_connect_error();
// 	die();
// }
$db = new PDO('mysql:host=localhost;dbname=green_rock', 'root', '');

?>
