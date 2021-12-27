<?php

/*
 * Variabili e relativa visualizzazione
 */

$a = 5;
$b = 3;
$c = $a / $b;     // Il tipo è gestito dal linguaggio in automatico, come col JS

echo $c, "<br />";

echo "Stampa con variabile $c", "<br />";
echo 'Stampa senza variabile $c (singoli apici)', "<br />";

// Concatenazione di stringhe
echo "Ciao " . ($c+1) . " mondo", "<br />";

// Visualizzazione del tipo e il valore della variabile
var_dump($c);
echo "<br />";

// Stampa più leggibile
print_r($c . "<br />");

// Conversione della variabile a intero
var_dump((int) $c);


/*
 * Array
 */

$array = array(1, 2, 3, 4, 5, 6);
$array = [1, 2, 3, 4, 5 , 6];

echo "<pre>";     // <pre> formatta in modo più leggibile l'output
var_dump($array);
echo "</pre>";

// Array con una stringa come indice
$arrayIndiceCustom = [1, "ciao" => 2, 3, 4, 5];
echo "<pre>";
print_r($arrayIndiceCustom);
echo "</pre>";

// Iterazione di un un array
# Tramite il loop for normale: for($i=0; $i<...)
# Oppure con il foreach:
foreach ($array as $key => $val) {
  echo "K: $key - V: $val <br>";
}


/*
 * Funzioni
 */

function ciao() {
  echo "<br />Ciao<br />";
}

ciao();

function scambiaSbagliata($v1, $v2) {
  // Se si modificano le variabili all'interno delle funzioni,
  // i cambiamenti rimangono all'interno della funzione;
  // le variabili ricevute sono dunque delle copie.
  $tmp = $v1;
  $v1 = $v2;
  $v2 = $tmp;
}

function scambia(&$v1, &$v2) {
  // Le modifiche alle variabili hanno effetto anche fuori.
  // Con l'& si riceve il riferimento ad una variabile.
  $tmp = $v1;
  $v1 = $v2;
  $v2 = $tmp;
}

$v1 = 1;
$v2 = 2;

echo "<br />v1: $v1 - v2: $v2<br />";

scambiaSbagliata($v1, $v2);
echo "v1: $v1 - v2: $v2<br />";

scambia($v1, $v2);
echo "v1: $v1 - v2: $v2";

?>