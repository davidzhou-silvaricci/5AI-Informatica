<?php

# Per recuperare parametri dalle richieste GET alla pagina
$_GET["nome_variabile"];

# Per prendere i dati inviati da un form
$_POST["chiave"];

# È sconsigliato in produzione prendere valori da $_GET e $_POST
# ed assegnarli direttamente a delle variabili,
# perchè permette a malintenzionati di inserire anche del codice nelle pagine.

?>