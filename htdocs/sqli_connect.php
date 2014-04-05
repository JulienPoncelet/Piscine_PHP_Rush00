<?php
function sql_connect()
{
	$login = "root";
	$passwd = "209742Vinc";
	$db = mysqli_connect('local.42.fr', $login, $passwd, 'e-shop');
	if (!isset($db))
	{
		print("Error connecting to database\n");
		return (FALSE);
	}
	else
		print("Successfully connected\n");
	return ($db);
}
?>