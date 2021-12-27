<?php
include('autoloader.php');
include('header.php');

$libri = new Libri();

if(isset($_POST["submit"])) {
  $libri->aggiungi($_POST);
}

if(isset($_GET["svuota"])) {
  $libri->svuota();
}

if(isset($_GET["delete"])) {
  $libri->elimina($_GET["delete"]);
}

if(isset($_GET["update"]) && isset($_GET["stato"])) {
  if(isset($_SESSION["libri"][$_GET["update"]])) {
    $libro = unserialize($_SESSION["libri"][$_GET["update"]]);
    $libro->modificaStato($_GET["stato"]);
  }
}
?>

<body>

  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <h1>Lista Libri</h1>
      </div>
    </div>

    <div class="grid-x grid-margin-x small-up-2 medium-up-3">

  <!-- qui stampo l'elenco dei libri ( isbn - titolo  che formano un link al libro nel dettaglio)  -->

<?php

foreach($_SESSION["libri"] as $k=>$v) {
  $libro = unserialize($v);
  $libro->stampa();
}

?>

    
  </div>
</body>

</html>