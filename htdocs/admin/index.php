<div class="all">

<?PHP

include("../mysqli/sqli_connect.php");

session_start();
if (isset($_SESSION['login']))
	require_once("../includes/header_login.php");
else
	require_once("../includes/header_logout.php");

require_once("../includes/footer.php");

?>

	<body class="administration">
		<div id="div_middle">
			<h2>Bienvenue sur la page d'administration</h2>
			<h3>Que voulez-vous faire ?</h3>
			<ul class="ft_list">
				<li><a href="../items/add_item.php">Ajouter un item</a></li>
				<li>Modifier un item</li>
				<li>Delete un item</li>
				<li>Modifier un membre</li>
				<li>Delete un membre</li>
			</ul>
		</div>
	</body>
</div>
