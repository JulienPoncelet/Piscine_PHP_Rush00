<?PHP

function add_to_cart($id)
{
	session_start();
	if (isset($_SESSION['cart']))
		$cart = unserialize($_SESSION['cart']);
	$db = sql_connect();
	$row = mysqli_query($db, "SELECT * FROM `product`");
	while ($array = mysqli_fetch_array($row, MYSQLI_NUM))
	{
		if ($array[0] == $id)
		{
			if ($array[2] != 0)
			{
				$query = "UPDATE `product` SET `stock`= $array[2] - 1 WHERE ID = $id";
				mysqli_query($db, $query);
				$cart['$id']++;
				$cart['price'] += $array[1];
				$_SESSION['cart'] = serialize($cart);
				return (TRUE);
			}
			else
				return (FALSE);
		}
	}
	return (FALSE);
	mysqli_close($db);
}
?>