<?php
include('autoloader.php');
include('header.php');

$articolo = new Articolo();
if(isset($_GET['id']))
    $item = $articolo->view($_GET['id']);
?>

<div class="row medium-8 large-7 columns">

<div class="grid-x grid-padding-x">
  <div class="large-6 cell">
  
    Titolo: <?= $item->title ?><br />
    Autore: <?= $item->author ?><br />
    Testo: <?= $item->text ?>
    <hr>
    <a class="button alert" href='<?= $articolo->urlDelete($item->id); ?>'>Elimina</a>

  </div>
</div>     
</body>
</html>