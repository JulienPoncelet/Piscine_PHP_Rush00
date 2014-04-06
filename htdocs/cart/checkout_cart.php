<?PHP
session_start();
if (isset($_SESSION['cart']))
{
	$cart = unserialize($_SESSION['cart']);
	foreach ($cart as $key => $val)
	{
		if ($key != "price")
		{
			$cart[$key] = 0;
		}
	}
	$cart['price'] = 0;
	$_SESSION['cart'] = NULL;
}
header("Location: index.php");
?>