<div class="all">

<?PHP

include("../mysqli/sqli_connect.php");

session_start();
if (isset($_SESSION['login']) && isset($_SESSION["admin"]))
{
	if ($_SESSION["admin"] === "0")
		require_once("../includes/header_login.php");
	else
		require_once("../includes/header_admin.php");
}
else
	require_once("../includes/header_logout.php");

require_once("../includes/footer.php");

$cart = unserialize($_SESSION["cart"]);
print_r($cart);

?>

</div>
