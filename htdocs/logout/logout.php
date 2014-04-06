<?PHP
session_start();
$_SESSION['login'] = NULL;
$_SESSION['basket'] = NULL;
$_SESSION['admin'] = "0";
header ("Location: /index.php");
?>
