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
if ($cart)
{
	foreach ($cart as $key => $val)
	{
		if ($val != 0 && $key != "price")
			echo "$key: $val";
	}
	echo "Total price is: $cart[price]";
}
else
	echo "Total price is: 0, cart is empty";
?>

</div>
