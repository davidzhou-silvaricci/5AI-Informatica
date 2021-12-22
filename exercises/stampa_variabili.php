<!-- Creare 10 variabili e provare a stamparle in un ciclo con una sola riga di stampa -->

<?php

$v1 = 1;
$v2 = 2;
$v3 = 3;
$v4 = 4;
$v5 = 5;
$v6 = 6;
$v7 = 7;
$v8 = 8;
$v9 = 9;
$v10 = 10;

echo "Metodo 1<br>";
for($i = 1; $i <= 10; $i++) {
  echo "${'v'.$i}", " ";
}
echo "<br><br>Metodo 2 (sbagliato)<br>";
for($i = 1; $i <= 10; $i++) {
  $nome = "v$i"." ";
  print $nome;
}
echo "<br><br>Metodo 2<br>";
for($i = 1; $i <= 10; $i++) {
  $nome = "v$i";
  print $$nome." ";
}
echo "<br><br>Metodo 3<br>";
for($i = 1; $i <= 10; $i++) {
  echo ${("v$i")}." ";
}
?>