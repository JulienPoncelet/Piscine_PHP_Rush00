<?php
include ("../mysqli/sqli_connect.php");
if ($_POST["oldname"] === "")
	exit ;
$db = sql_connect();
$name = $_POST["oldname"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$loc = $_POST["loc"];
$size = $_POST["size"];
$picture = $_POST["picture"];
$newname = $_POST["newname"];
if ($_POST["newname"])
{
	$query = "UPDATE `product` SET `ID`= '$newname' WHERE ID = '$name'";
	mysqli_query($db, $query);
}
if ($_POST['price'])
{
	$query = "UPDATE `product` SET `price`= '$price' WHERE ID = '$name'";
	mysqli_query($db, $query);
}
if ($_POST['size'])
{
	$query = "UPDATE `product` SET `size`= '$size' WHERE ID = '$name'";
	mysqli_query($db, $query);
}
if ($_POST['stock'])
{
	$query = "UPDATE `product` SET `stock`= '$stock' WHERE ID = '$name'";
	mysqli_query($db, $query);
}
if ($_POST['loc'])
{
	$query = "UPDATE `product` SET `loc`= '$loc' WHERE ID = '$name'";
	mysqli_query($db, $query);
}
if ($_POST['picture'])
{
	$query = "UPDATE `product` SET `picture`= '$picture' WHERE ID = '$name'";
	mysqli_query($db, $query);
}
?>