<!-- nome del prodotto, descrizione quantità
il form invia i dati in un altro file, che stampa i dati con il messaggio "Il prodotto è stato salvato in magazzino."
i dati possono essere salvati, con i cookie, le sessioni, i file, i database. L'esercizio richiede di usare le sessioni. -->

<?php

session_start();

echo '<pre>';
echo "<br> Aggiungi prodotto <a href='gestioneMagazzino.php'>Vedi magazzino</a> <hr>";

?>

<form method="POST" action="<?= $_SERVER['PHP_SELF']?>">
    <label for="nome">Nome del prodotto</label><br />
    <input type="text" id="nome" name="nome"><br />
    <label for="descrizione">Descrizione</label><br />
    <textarea id="descrizione" name="descrizione" rows="5" cols="33"></textarea><br /><br />
    <input type="submit" name="submit" value="Salva">
</form>

<?php

if(isset($_POST['submit'])) {
	// ATTENZIONE! In produzione non usare mai direttamente le variabili POST e GET
	$prodotto['nome'] = $_POST['nome'];
	$prodotto['descrizione'] = $_POST['descrizione'];
	# $prodotto['quantità'] = $_POST['quantità'];
	
	// Salvo i dati nella sessione
	$_SESSION['carrello'][] = $prodotto;	// lasciando la seconda quadra vuota, l'indice diventa progressivo
	
	echo "Il prodotto ".$_POST['nome'], " è stato salvato in magazzino.<br>";
}

/*
if(empty($_SESSION["count"])) {
    $_SESSION["count"] = 0;
    echo $_SESSION["count"];
}

else if(isset($_POST['nome']) && isset($_POST['descrizione'])) {
    $_SESSION["count"] = $_SESSION["count"] + 1;
    $nome = $_SESSION['count']."_nome";
    $descrizione = $_SESSION['count']."descrizione";

    $_SESSION[$$nome] = $_POST['nome'];
    $_SESSION[$$descrizione] = $_POST['descrizione'];
    echo "Il prodotto ".$_SESSION[$$nome], " è stato salvato in magazzino.";
}
*/

?>