<?PHP

include("../mysqli/sqli_connect.php");

session_start();
if (isset($_SESSION['login']))
	require_once("../includes/header_login.php");
else
	require_once("../includes/header_logout.php");

require_once("../includes/footer.php");

?>

<html>
	<body>
		Bienvenue sur la page d'administration
		Que voulez-vous faire ?
			- Ajouter un item.
			- Modifier un item.
			- Delete un item.
			- Modifier un membre. (le passer en admin par exemple).
			- Delete un membre.
			- Acces aux panier des membres
	</body>
</html>
