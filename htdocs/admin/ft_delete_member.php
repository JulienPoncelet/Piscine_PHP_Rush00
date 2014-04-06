<?php
include ("../mysqli/sqli_connect.php");
$db = sql_connect();
$name = $_POST['name'];
$query = "DELETE FROM `user` WHERE `login` = '$name'";
mysqli_query($db, $query);
?>