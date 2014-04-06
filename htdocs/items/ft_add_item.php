<?PHP

function			ft_add_item($db, $tab)
{
	$name = $tab["name"];
	$price = $tab["price"];
	$stock = $tab["stock"];
	$loc = $tab["localisation"];
	$size = $tab["size"];
	$picture = $tab["picture"];
	$query = "INSERT INTO `vrey_shop`.`product` (`ID`, `price`, `stock`, `localisation`, `size`, `picture`) VALUES ('$name', '$price', '$stock', '$loc', '$size', '$picture')";
	mysqli_query($db, $query);
}

?>
