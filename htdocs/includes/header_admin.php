<!DOCTYPE html>

<html>
	<head>
		<link href="../style/style.css" type="text/css" rel="stylesheet"/>
	</head>
	<header>
		<div>
			<h1>42 E-Commerce</h1>
			<div class="user">
				User : <?PHP print($_SESSION["login"])?>
			</div>
			<div class="user">
				<a href="../logout/logout.php">Logout</a>
			</div>
		</div>
		<ul class="menu">
			<li><a href="/index.php">Home</a></li>
			<li><a href="../shop/index.php">Shop</a></li>
			<li><a href="../account/index.php">My Account</a></li>
			<li><a href="/admin/index.php">Admin</a></li>
		</ul>
	</header>
</html>
