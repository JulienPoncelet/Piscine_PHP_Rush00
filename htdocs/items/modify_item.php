<div class="all">

<?PHP
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

?>

<div class="login">
	<h1>Modify Item</h1>
	<form action="ft_modify_item.php" method="POST" class="form_login">
		<div id="login_passwd">
			<label for="">Name : </label><input id="input" type="text" name="oldname"><br />
			<label for="">New name</label><input id="input" type="text" name="newname"><br />
			<label for="">New pic</label><input id="input" type="text" name="picture"/><br />
			<label for="">New price</label><input id="input" type="text" name="price"/><br />
			<label for="">New stock</label><input id="input" type="stock" name="stock"/><br />
			<label for="">New Loc</label><input id="input" type="text" name="loc"/><br />
			<label for="">New size</label><input id="input" type="size" name="size"/><br />
		</div>
		<div>
			<input class="bouton" type="submit" name="submit" value="OK"/>
		</div>
	</form>
</div>


</div>
