<?php
include('autoloader.php');
include('header.php');

$logger = new Logger();

if (isset($_GET["svuota"])) {
  $logger->svuota();
}

if (isset($_GET["delete"])) {
  $logger->elimina($_GET["delete"]);
}
?>

<body>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <h1>Lista log</h1>
      </div>
    </div>

    <div class="grid-x grid-margin-x small-up-2 medium-up-3">
      <!-- qui stampo l'elenco delle pagine visitate   -->
      <?php
      $i = 0;
      foreach (array_reverse($_SESSION["logger"]) as $k => $v) {
        $logger = unserialize($v);
        $logger->stampa();
        $i++;
        if ($i == 20) break;
      }
      ?>
    </div>
  </div>
</body>

</html>