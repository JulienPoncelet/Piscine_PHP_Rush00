<?PHP

include("../items/ft_add_item.php");

function			ft_demo($db)
{
	$item = array("name" => "Aermacchi Lockheed AL60B2", "price" => 30000, "stock" => 1, "localisation" => "France", "size" => 6, "picture" => "http://static.aircraft24.com/images/aircraftpics/83/pic_116483_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Alpi Aviation Pioneer 200 Sparrow", "price" => 41000, "stock" => 1, "localisation" => "Italie", "size" => 2, "picture" => "http://static.aircraft24.com/images/aircraftpics/63/pic_116063_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "HB-Flugtechnik HB 207 VRG", "price" => 58000, "stock" => 1, "localisation" => "Allemagne", "size" => 2, "picture" => "http://static.aircraft24.com/images/aircraftpics/49/pic_116549_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Republic UC-1 Twin Seabee", "price" => 108759, "stock" => 2, "localisation" => "USA", "size" => 5, "picture" => "http://static.aircraft24.com/images/aircraftpics/94/pic_116894_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Aerostar 601P", "price" => 72774, "stock" => 1, "localisation" => "USA", "size" => 3, "picture" => "http://static.aircraft24.com/images/aircraftpics/23/pic_115623_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Dehavilland Dove D.H.104-7XC Dove Oldtimer 1963", "price" => 119000, "stock" => 1, "localisation" => "Allemagne", "size" => 11, "picture" => "http://static.aircraft24.com/images/aircraftpics/33/pic_100133_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Aero Commander 690BII", "price" => 423358, "stock" => 1, "localisation" => "USA", "size" => 7, "picture" => "http://static.aircraft24.com/images/aircraftpics/44/pic_116944_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Piper Saratoga", "price" => 155292, "stock" => 1, "localisation" => "Suisse", "size" => 6, "picture" => "http://static.aircraft24.com/images/aircraftpics/92/pic_116992_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Piper Jetprop DL", "price" => 450000, "stock" => 1, "localisation" => "Allemagne", "size" => 6, "picture" => "http://static.aircraft24.com/images/aircraftpics/74/pic_115574_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Airbus 320-214", "price" => 54744526, "stock" => 1, "localisation" => "France", "size" => 242, "picture" => "http://static.aircraft24.com/images/aircraftpics/09/pic_117109_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Yakovlev 40", "price" => 306569, "stock" => 1, "localisation" => "Russie", "size" => 121, "picture" => "http://static.aircraft24.com/images/aircraftpics/87/pic_115287_1_med.jpg");
	ft_add_item($db, $item);
	$item = array("name" => "Enstrom 280FX", "price" => 122517, "stock" => 1, "localisation" => "Canada", "size" => 5, "picture" => "http://static.aircraft24.com/images/aircraftpics/79/pic_114579_1_med.jpg");
	ft_add_item($db, $item);
}

?>
