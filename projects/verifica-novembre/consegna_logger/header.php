<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista log</title>
  <link rel="stylesheet" href="assets/css/foundation.css">
</head>

<body>

  <!-- Start Top Bar -->
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li> <a href="index.php">ELENCO LOG</a></li>
        <li><a href="pagina1.php">PAGINA 1</a></li>
        <li><a href="pagina2.php">PAGINA 2</a></li>
        <li><a href="pagina3.php">PAGINA 3</a></li>
        <li><a href="pagina4.php">PAGINA 4</a></li>
        <li><a href="<?= $_SERVER['PHP_SELF'] . '?svuota=' ?>">SVUOTA IL LOGGER</a></li>

      </ul>
    </div>
  </div>
  <!-- End Top Bar -->

  <div class="callout large primary">
    <div class="row column text-center">
      <h1>Libreria</h1>
      <h2 class="subheader"></h2>
    </div>
  </div>