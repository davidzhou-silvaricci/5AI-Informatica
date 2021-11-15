<?php
include('autoloader.php');
if(isset($_GET['id'])) {
  $articolo = new Articolo();
  $articolo->load($_GET['id']);
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista prodotti</title>
  <link rel="stylesheet" href="assets/css/foundation.css">
</head>
  <body>

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">LISTA ARTICOLI</li>
          <li><a href="#">AGGIUNGI UN ARTICOLO</a></li>
          <li><a href="#">ELIMINA TUTTI GLI ARTICOLI</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->

    <div class="callout large primary">
      <div class="row column text-center">
        <h1>LISTA ARTICOLI</h1>
        <h2 class="subheader">ELENCO DEGLI ARTICOLI INSERITI</h2>
      </div>
    </div>

    <!-- We can now combine rows and columns when there's only one column in that row -->
    <div class="row medium-8 large-7 columns">

      <div class="grid-x grid-padding-x">
        <div class="large-6 cell">
  

          <form action="index.php" method='POST' enctype="multipart/form-data">
          <input type="hidden" id="id" name="id" value="<?= $articolo->id?>">

            <label for="titolo">Titolo</label>
            <input class='form-input' type="text" id="titolo" name="titolo" placeholder='Titolo' value='<?= $articolo->titolo?>'>
            <label for="autore">Autore</label>
            <input class='form-input' type="text" id="autore" name="autore" placeholder='Autore' value='<?= $articolo->autore?>'>
            <label for="testo">Testo</label>
            <input type="text" id="testo" name="testo" value='<?= $articolo->testo?> placeholder='Testo'>
            <input type="file" name="upload" id="upload">

            <input class='button small expanded' type="submit" name=update value="Aggiungi">

          </form>
        </div>
      </div>
  
    </div>
</body>
</html>
