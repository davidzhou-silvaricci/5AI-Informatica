<?php
include('autoloader.php');
include('header.php');

if (isset($_GET["id"])) {
  $libro = unserialize($_SESSION["libri"][$_GET["id"]]);
}
?>

<body>
  <div class="grid-container">
    <div class="grid-x grid-margin-x small-up-2 medium-up-3">
      <!-- stampo tutti i libri nel dettaglio ( potete utulizzare il metodo stampa ) -->
      <?= $libro->stampa() ?>
    </div>

    <!-- stampo il pulsante adeguato a seconda dello stato del libro -- potete spostare questo html nella classe se preferite -->
    <?php
    if ($libro->getStato() == "Disponibile") {
    ?>
      <a class="button warning" href='index.php?update=<?= $libro->getIsbn() ?>&stato=In%20prestito'>Consegna in prestito</a>
    <?php
    } else {
    ?>
      <a class="button success" href='index.php?update=<?= $libro->getIsbn() ?>&stato=Disponibile'>Tornato disponibile</a>
    <?php
    }
    ?>

    <a class="button alert" href="index.php?delete=<?= $libro->getIsbn() ?>">elimina</a>
  </div>
</body>

</html>