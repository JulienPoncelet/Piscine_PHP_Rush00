<?PHP

include("./mysqli/sqli_connect.php");
session_start();
if (isset($_SESSION['login']))
	echo $_SESSION['login'];
else
	echo "Not logged in\n";
require_once("./includes/header.php");
require_once("./includes/footer.php");

?>
