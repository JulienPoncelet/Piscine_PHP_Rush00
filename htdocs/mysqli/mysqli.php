<?php
function access_sql()
{
?>
<HTML>
	<HEAD>
		<TITLE>
			SQL Requested login
		</TITLE>
	</HEAD>
	<BODY>
		<form method="post" name="login" action="connect_mysqli.php">
		Login: <input type="text" name="login"><br />
		Password: <input type="password" name="passwd"><br />
		<input type="submit" name="submit" value="OK"><br />
		</form>
	</BODY>
</HTML>
<?php
};
?>