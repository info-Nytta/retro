<?php
$page="pages/retro.html";
$cim="Retró stílus";

if (isset($_GET['p'])){
	switch ($_GET['p']) {
		case '1': {
			$page="pages/zenek.php";
			$cim="Magyar zenék";
			break;
		}
		case '2': {
			$page="pages/kereses.php";
			$cim="Keresés";
			break;
		}
		case '0': {
			$page="pages/feladat.html";
			$cim="Feladat leírás";
			break;
		}
	}
}
else if (isset($_GET['keres'])) {
	$page="pages/kereses.php";
	$cim="Találatok";
}

?>