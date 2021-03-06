#!/usr/bin/php
<?PHP

include("./ft_demo.php");

echo "Please write your login:\n";
$login = trim(fgets(STDIN));
echo "Please write your password:\n";
$password = trim(fgets(STDIN));

$connect = mysqli_connect('local.42.fr', $login, $password);
$sql="CREATE DATABASE IF NOT EXISTS vrey_shop";
if (mysqli_query($connect, $sql))
	echo "Database created successfully\n\n";
else
	echo "Error creating database\n\n";

echo "Please write your admin-login:\n";
$admin_login = trim(fgets(STDIN));
echo "Please write your admin-password:\n";
$admin_password = hash("whirlpool", trim(fgets(STDIN)));

$connect = mysqli_connect('local.42.fr', $login, $password, "vrey_shop");
$sql="CREATE TABLE user(login CHAR(30),passwd CHAR(128),admin CHAR(1), root_access INT)";
if (mysqli_query($connect, $sql))
	echo "Table created successfully\n\n";
else
	echo "Error creating table\n\n";

$sql = "INSERT INTO `vrey_shop`.`user` (`login`, `passwd`, `admin`, `root_access`) VALUES ('$admin_login', '$admin_password', '1', '0')";
if (mysqli_query($connect, $sql))
	echo "Admin added successfully\n\n";
else
	echo "Error adding admin\n\n";

$sql="CREATE TABLE product(ID CHAR(30), price INT, stock INT, localisation CHAR(30), size INT, picture CHAR(255))";
if (mysqli_query($connect, $sql))
	echo "Table created successfully\n\n";
else
	echo "Error creating table\n\n";

$demo = "banane";
while ($demo !== "Y" && $demo !== "N")
{
	echo "Would you like the demo of the site ? (Y/N):\n";
	$demo = trim(fgets(STDIN));
}

if ($demo === Y)
	ft_demo($connect);

mysqli_close($connect);
?>
