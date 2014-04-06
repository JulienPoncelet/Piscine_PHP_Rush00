<?PHP

session_start();
if (isset($_SESSION['login']))
	require_once("../includes/header_login.php");
else
	require_once("../includes/header_logout.php");

require_once("../includes/footer.php");
?>

<div class="login">
	<h1>Member - Connexion</h1>
	<form action="login.php" method="POST" class="form_login">
		<div id="login_passwd">
			<label for="">Login : </label><input id="input" type="text" name="login"/><br />
			<label for="">Password : </label><input id="input" type="password" name="passwd"/><br />
		</div>
		<div>
			<input class="bouton" type="submit" name="submit" value="OK"/>
		</div>
	</form>
	<div class="fail">
		</br>
		Incorrect Login or Password </br>
		Please try again
	</div>
</div>
