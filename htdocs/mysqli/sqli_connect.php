<?php
include("mysqli.php");
function sql_connect()
{
	$db = mysqli_connect('local.42.fr', "root", "abc123", 'vrey_shop');
	if (!isset($db))
	{
		print("Error connecting to database\n");
		$_SESSION['dblogin'] = NULL;
		$_SESSION['dbpasswd'] = NULL;
		return (FALSE);
	}
	return ($db);
}
?>
