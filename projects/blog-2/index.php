<?php
include('autoloader.php');
include('header.php');

$articolo = new Articolo();

if(isset($_POST['submit']))
    $articolo->store($_POST);


if(isset($_GET['delete']))
    $articolo->delete($_GET['delete']);


if(isset($_GET['svuota']))
    $articolo->restart();    


$lista = $articolo->lista();
?>

<div class="row medium-8 large-7 columns">

<div class="grid-x grid-padding-x">
  <div class="large-6 cell">
  <?php while($obj = $lista->fetch_object()): ?>
    
    <a href='<?= $articolo->urlView($obj->id) ?>'>
      <b><?= $obj->title ?></b> di <?= $obj->author ?>
    </a>
    <hr>
    <?php endwhile; ?>
  </div>
</div>     
</body>
</html>