<?PHP
echo "Please write your login:\n";
$login = trim(fgets(STDIN));
echo "Please write your password:\n";
$password = trim(fgets(STDIN));
$connect = mysqli_connect('local.42.fr', $login, $password);
$sql="CREATE DATABASE IF NOT EXISTS vrey_shop";
if (mysqli_query($connect, $sql))
  echo "Database created successfully\n";
else
  echo "Error creating database\n";
$connect = mysqli_connect('local.42.fr', $login, $password, "vrey_shop");
$sql="CREATE TABLE user(login CHAR(30),passwd CHAR(128),root_access INT)";
if (mysqli_query($connect, $sql))
  echo "Table created successfully\n";
else
  echo "Error creating table\n";
$sql="CREATE TABLE product(ID CHAR(30),price INT,stock INT)";
if (mysqli_query($connect, $sql))
  echo "Table created successfully\n";
else
  echo "Error creating table\n";
mysqli_close($connect);
?>