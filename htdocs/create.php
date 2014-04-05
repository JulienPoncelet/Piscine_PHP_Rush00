<?PHP
include("sqli_connect.php");
function check_serial($db)
{
	$row = mysqli_query($db, "SELECT login FROM `user`");
	while ($array = mysqli_fetch_array($row, MYSQLI_NUM))
	{
		if ($array[0] == $_POST['login'])
				return (FALSE);
	}
	return (TRUE);
}
$db = sql_connect();
if (!isset($_POST['login']) || !isset($_POST['passwd']) || $_POST['submit'] != "OK")
{
	echo "ERROR\n";
	exit;
}
if (check_serial($db) != FALSE)
{
	echo "OK\n";
	$log = $_POST['login'];
	$passwd = hash("whirlpool", $_POST['passwd']);
	$sql = "INSERT INTO `vrey_shop`.`user` (`login`, `passwd`, `root_access`) VALUES ('$log', '$passwd', '0')";
	mysqli_query($db, $sql);
}
else
	echo "ERROR\n";
mysqli_close($db);
?>
