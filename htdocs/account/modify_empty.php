<?PHP

session_start();
if (isset($_SESSION['login']))
	require_once("../includes/header_login.php");
else
	require_once("../includes/header_logout.php");

require_once("../includes/footer.php");
?>

<div class="login">
	<h1>Modification du Mot de Passe</h1>
	<form action="modify.php" method="POST" class="form_login">
		<div id="login_passwd">
			<label for="">Old Pwd : </label><input id="input" type="password" name="old_passwd"/><br />
			<label for="">New Pwd : </label><input id="input" type="password" name="new_passwd"/><br />
		</div>
		<div>
			<input class="bouton" type="submit" name="submit" value="OK"/>
		</div>
	</form>
	<div class="fail">
		</br>
		Please fill all the fields
	</div>
</div>
