<?php
include "hlavicka.php";
include "menu.php";
if (isset($_GET["id"])) { // Testujeme, ci je nastavene id
	$id = $_GET["id"];
	if ($id == 1) {
		include "prva.php";
	}
	elseif ($id == 2) {
		include "druha.php";
	}
    elseif ($id == 3) {
        include "kontakt.php";
    }
	else {
		include "uvod.php";
	}
}
else { // Ak id NIE je nastavene, tak zobrazi uvod.php
	include "uvod.php";
}
include "pata.php";
?>