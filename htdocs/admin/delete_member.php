<div class="all">

<?PHP

include("../mysqli/sqli_connect.php");

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
	<h1>Delete member</h1>
	<form action="ft_delete_member.php" method="POST" class="form_login">
		<div id="login_passwd">
			<label for="">Name : </label><input id="input" type="text" name="name"><br />
		</div>
		<div>
			<input class="bouton" type="submit" name="submit" value="OK"/>
		</div>
	</form>
</div>