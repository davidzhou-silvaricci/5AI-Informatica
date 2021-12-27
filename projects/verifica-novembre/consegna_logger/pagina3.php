<?php
include('autoloader.php');
include('header.php');

$logger = new Logger();
$logger->aggiungi("Pagina 3");

?>

<body>
  <div class="grid-container">
    <div class="grid-x grid-margin-x small-up-2 medium-up-3">
      Pagina 3
    </div>
    <!-- link alle altre pagine -->
  </div>
</body>

</html>