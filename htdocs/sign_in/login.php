<?PHP
include("../mysqli/sqli_connect.php");
function check_serial($db)
{
	$row = mysqli_query($db, "SELECT * FROM `user`");
	while ($array = mysqli_fetch_array($row, MYSQLI_NUM))
	{
		if ($array[0] == $_POST['login'])
		{
			$pwd = hash("whirlpool", $_POST['passwd']);
			if ($array[1] == $pwd)
			{
				$_SESSION['login'] = $_POST['login'];
				return (TRUE);
			}
		}
	}
	return (FALSE);
}
session_start();
$db = sql_connect();
if (!isset($_POST['login']) || !isset($_POST['passwd']) || $_POST['submit'] != "OK")
{
	mysqli_close($db);
	header("Location: sign_in.php");
	exit;
}
if (check_serial($db) == FALSE)
{
	mysqli_close($db);
	header("Location: sign_in.php");
	exit;
}
else
{
	mysqli_close($db);
	echo "Connected\n";
	header("Location: ../index.php");
	exit;
}
?>