<div class="all">

<?PHP

include("../mysqli/sqli_connect.php");
include("./ft_add_item.php");

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

if (count($_POST))
{
	if ($_POST["name"] !== "" && $_POST["picture"] !== "" && $_POST["price"] !== "" && $_POST["stock"] !== "" && $_POST["localisation"] !== "" && $_POST["size"] !== "")
	{
		$db = sql_connect();
		ft_add_item($db, $_POST);
		mysqli_close($db);
	}
}

?>

<div class="login">
	<h1>Add Item</h1>
	<form action="add_item.php" method="POST" class="form_login">
		<div id="login_passwd">
			<label for="">Name : </label><input id="input" type="text" name="name"><br />
			<label for="">Picture : </label><input id="input" type="text" name="picture"/><br />
			<label for="">Price : </label><input id="input" type="text" name="price"/><br />
			<label for="">Stock : </label><input id="input" type="stock" name="stock"/><br />
			<label for="">Loc : </label><input id="input" type="text" name="localisation"/><br />
			<label for="">Size : </label><input id="input" type="size" name="size"/><br />
		</div>
		<div>
			<input class="bouton" type="submit" name="submit" value="OK"/>
		</div>
	</form>
</div>


</div>
