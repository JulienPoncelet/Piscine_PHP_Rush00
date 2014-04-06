<div class="all">

<?PHP

include("../mysqli/sqli_connect.php");
include("../shop/get_item.php");

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

$db = sql_connect();
$items = get_items($db);
$in = NULL;

$cart = unserialize($_SESSION["cart"]);
if ($cart)
{
	foreach ($cart as $key => $val)
	{
		if ($val != 0 && $key != "price")
			foreach ($items as $item)
				if ($item[0] === $key)
					$in[] = $item;
	}
	$i = 0;
}
else
	exit;
?>

	<div class="cart">
		Solde : <?PHP print($cart["price"]) ?>
		<a href="./checkout_cart.php"><img class="cart_img" src="../img/euro.png"/></a>
		<a href="./empty_cart.php"><img class="cart_img" src="../img/poubelle.jpg"/></a>
	</div>

	<table>
		<tr>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?><br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?> <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?>  <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
		</tr>
		<tr>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?> <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?> <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?>  <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
		</tr>
		<tr>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?> <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?> <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?>  <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
		</tr>
		<tr>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?> <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?> <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($in[$i]))
						exit;
				?>
				Name: <?PHP print($in[$i][0]) ?> <br/>
				Price: <?PHP print($in[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($in[$i][4]) ?> <br/>
				Localisaton: <?PHP print($in[$i][3]) ?> <br/>
				Stock restant: <?PHP print($in[$i][2]) ?> <br/>
				Dans le panier: <?PHP print($val) ?><br/>
				<img class="plane_pic" src="<?= $in[$i][5] ?>"/>
				<a href="../cart/remove_item.php?item=<?= $in[$i][0] ?>"><img src="../img/moins.png"></a>
				<?PHP $i++?>
			</td>
		</tr>
	</table>
</div>
