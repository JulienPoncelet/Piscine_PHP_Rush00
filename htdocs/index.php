<div class="all">

<?PHP

include("./mysqli/sqli_connect.php");
include("./shop/get_item.php");

session_start();
if (isset($_SESSION['login']) && isset($_SESSION["admin"]))
{
	if ($_SESSION["admin"] === "0")
		require_once("./includes/header_login.php");
	else
		require_once("./includes/header_admin.php");
}
else
	require_once("./includes/header_logout.php");

require_once("./includes/footer.php");

$db = sql_connect();
$items = get_items($db);
$i = 0;

?>

	<table>
		<tr>
			<td>
				<?PHP
					if (!isset($items[$i]))
						exit;
				?>
				Name: <?PHP print($items[$i][0]) ?> <br/>
				Price: <?PHP print($items[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($items[$i][4]) ?> <br/>
				Localisaton: <?PHP print($items[$i][3]) ?> <br/>
				Stock: <?PHP print($items[$i][2]) ?><br/>
				<img class="plane_pic" src="<?= $items[$i][5] ?>"/>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($items[$i]))
						exit;
				?>
				Name: <?PHP print($items[$i][0]) ?> <br/>
				Price: <?PHP print($items[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($items[$i][4]) ?> <br/>
				Localisaton: <?PHP print($items[$i][3]) ?> <br/>
				Stock: <?PHP print($items[$i][2]) ?> <br/>
				<img class="plane_pic" src="<?= $items[$i][5] ?>"/>
				<?PHP $i++?>
			</td>
			<td>
				<?PHP
					if (!isset($items[$i]))
						exit;
				?>
				Name: <?PHP print($items[$i][0]) ?> <br/>
				Price: <?PHP print($items[$i][1]) ?> &euro; <br/>
				Size: <?PHP print($items[$i][4]) ?> <br/>
				Localisaton: <?PHP print($items[$i][3]) ?> <br/>
				Stock: <?PHP print($items[$i][2]) ?>  <br/>
				<img class="plane_pic" src="<?= $items[$i][5] ?>"/>
				<?PHP $i++?>
			</td>
		</tr>
	</table>
</div>
