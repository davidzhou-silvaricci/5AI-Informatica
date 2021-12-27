<?php

session_start();

echo '<pre>';
echo "<br> Magazzino <a href='interfacciaMagazzino.php'>Aggiungi prodotto</a> <hr>";

// Per capire la logica scriviamo così, ma non è molto sicuro in pratica.
if(isset($_GET['restart'])) {
	$_SESSION['carrello'] = [];
	echo "Carrello vuoto <br>";
}

/*
if(isset($_SESSION['nome']) && isset($_SESSION['descrizione'])) {
    print_r($_SESSION);
}
*/

if(isset($_SESSION["carrello"])) {
	foreach($_SESSION["carrello"] as $key => $value) {
		echo $value['nome'].": ".$value['descrizione']."<br />";
	}
}

?>

<a href="gestioneMagazzino.php?restart=true">Pulisci</a>