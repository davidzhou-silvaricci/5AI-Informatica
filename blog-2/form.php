<?php
include('autoloader.php');
include('header.php');

$articolo = new Articolo();
$lista = $articolo->lista();
?>

<div class="row medium-8 large-7 columns">

<div class="grid-x grid-padding-x">
  <div class="large-6 cell">
 
  

          <form action="<?= Articolo::urlHome() ?>" method='POST' enctype="multipart/form-data">
            <label for="titolo">Titolo</label>
            <input class='form-input' type="text" id="titolo" name="titolo" placeholder='Titolo'>
            <label for="autore">Autore</label>
            <input type="text" id="autore" name="autore" placeholder='Autore'>
            <label for="testo">Testo</label>
            <input type="text" id="testo" name="testo" placeholder='Testo'>
            <input type="file" name="upload" id="upload">

            <input class='button small expanded' type="submit" name=submit value="Aggiungi">

          </form>
          
  </div>
</div>     
</body>
</html>
