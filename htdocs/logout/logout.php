<?PHP
session_start();
$_SESSION['login'] = NULL;
$_SESSION['basket'] = NULL;
header ("Location: /index.php");
?>
