<!--
<form method="post" action="input.php">
  <label for="fname">Nome</label>
  <input type="text" id="fname" name="fname" value="David">
  <input type="submit" value="Invia">
</form>

Questo di seguito funziona in qualsiasi file PHP perché prende il nome del file
tramite la variabile globale $_SERVER e la chiave PHP_SELF
-->

<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
  <label for="fname">Nome</label>
  <input type="text" id="fname" name="fname" value="David">
  <input type="submit" value="Invia">
</form>

<?php

if(!empty($_POST))
  echo $_POST["fname"];

?>