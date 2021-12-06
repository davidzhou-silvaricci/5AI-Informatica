<?php
include('autoloader.php');
include('header.php');

if(isset($_GET["id"])) {
  $intervento = new Intervento();
  $obj = $intervento->load($_GET["id"]);
}



?>
<div class="row medium-8 large-7 columns">

  <div class="grid-x grid-padding-x">
    <div class="large-6 cell">
      <h3 class='text-center'> INTERVENTO CODICE <?= $obj->id ?></h3>

      <div class="callout small">
        <h5>Intervento codice: <?= $obj->id ?> </h5>
        <p>Tecnico: <b><?= $obj->tecnico ?></b></p>
        <?php if($obj->nota !== ""): ?>
          <p>Note: <?= $obj->nota ?></p>
        <?php else: ?>
          <p>Note: <i>Nessuna nota disponibile.<i></p>
        <?php endif; ?>
        <p>Parcella: <?= $obj->parcella ?> euro</p>
        <a class="button success" href="<?= Url::urlSconta($obj->id) ?>">Sconta del 30%</a>
      </div>
    </div>
  </div>
  </body>

  </html>