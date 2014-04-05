<?PHP

require_once("./includes/header.php");
require_once("./includes/footer.php");

?>

<div class="login">
	<h1>New Member</h1>
	<form action="create.php" method="POST" class="form_login">
		<div id="login_passwd">
			<label for="">Login : </label><input id="input" type="text" name="login"/><br />
			<label for="">Password : </label><input id="input" type="password" name="passwd"/><br />
		</div>
		<div>
			<input class="bouton" type="submit" name="submit" value="OK"/>
		</div>
<?PHP

if (isset($_GET["sign_up"]) && $_GET["sign_up"] === "fail")
	print("FAIL\n");

?>
	</form>
</div>
