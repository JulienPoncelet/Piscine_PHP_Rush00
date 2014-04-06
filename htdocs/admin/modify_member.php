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
	<h1>Modify member</h1>
	<form action="ft_modify_member.php" method="POST" class="form_login">
		<div id="login_passwd">
			<label for="">Name : </label><input id="input" type="text" name="oldname"><br />
			<label for="">New name</label><input id="input" type="text" name="newname"><br />
			<label for="">New pass</label><input id="input" type="passwd" name="passwd"/><br />
			<label for="">New admin</label><input id="input" type="text" name="admin"/><br />
		</div>
		<div>
			<input class="bouton" type="submit" name="submit" value="OK"/>
		</div>
	</form>
</div>


</div>
