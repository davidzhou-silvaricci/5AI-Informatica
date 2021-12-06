<?php
include('autoloader.php');
include('header.php');

$intervento = new Intervento();

if(isset($_POST["submit"]))
  $intervento->add($_POST);
if(isset($_GET["sconta"]))
  $intervento->applyDiscount($_GET["sconta"]);
if(isset($_GET["delete"]))
  $intervento->delete($_GET["delete"]);

$lista = Intervento::getInterventi();

// Si poteva fare un metodo per una lista con tutte le caratteristiche
if(isset($_GET["tecnico"])) {
  $lista = $intervento->getByTecnico($_GET["tecnico"]);
}
if(isset($_GET["importo"])) {
  $lista = $intervento->getByParcella();
}
if(isset($_GET["nosconto"])) {
  $lista = $intervento->getNonScontati();
}
?>

<div class="row medium-8 large-7 columns">

<div class="grid-x grid-padding-x">
  <div class="large-6 cell">
    <h3 class='text-center'>LISTA INTERVENTI</h3>
    <table>
      <!--- esempio codice html tabella lista interventi -->
      <tr>
        <th>Tecnico</th>
        <th><a href="<?= Url::urlImporto() ?>">Parcella</a></th>
        <th><a href="<?= Url::urlSenzaSconto() ?>">Parcella scontata</a></th>
        <th>Azioni</th>
      </tr>
      <?php while($obj = $lista->fetch_object()) : ?>
        <tr>
          <td><a href='<?= Url::urlTecnico($obj->tecnico) ?>'><?= $obj->tecnico ?></a></td>
          <?php if($obj->scontato == 0): ?>
            <td><?= $obj->parcella ?> euro</td>
            <td>/</td>
          <?php else: ?>
            <td><s><?= $obj->parcella ?> euro</s></td>
            <td><?= $obj->scontato ?> euro</td>
          <?php endif; ?>
          <td>
            <a href="<?= Url::urlView($obj->id) ?>">Visualizza</a>
            <a href="<?= Url::urlDelete($obj->id) ?>">Elimina</a>
          </td>
        </tr>
        <!--<tr>
          <th>Tecnico</th>
          <th>Parcella</th>
          <th>Parcella scontata</th>
        </tr>
        <tr>
          <td><a href=''>Mario</a></td>
          <td><s>1000 euro</s></td>
          <td>700 euro</td>
        </tr>
        <tr>
          <td><a href=''>Luca</a></td>
          <td>1200 euro</td>
          <td>/</td>
        </tr>-->
      <?php endwhile; ?>
    </table>
  </div>
</div>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</body>
</html>