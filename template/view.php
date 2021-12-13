<?php

include("autoloader.php");

/*
if (isset($_GET["id"])) {
    $classe = new Classe();
    $obj = $classe->load($_GET["id"]);
}
*/

$title = "Dettagli elemento " . (isset($_GET["id"]) ? $_GET["id"] : "") . " - Template";
include("components/my-header.php");

?>

<!-- Elemento dettagli -->
<?php if (isset($obj) && !empty($obj)) : ?>
    <div class="uk-card uk-card-default uk-card-body uk-margin-medium">
        <div class="uk-card-badge">
            <span class="uk-label">Etichetta</span>
        </div>
        <h3 class="uk-card-title">Elemento <?= $obj->id ?></h3>
        <p class="uk-text-primary">Testo</p>
        <p class="uk-margin-medium-bottom">Descrizione</p>
<?php else : ?>
    <div class="uk-card uk-card-default uk-card-body uk-margin uk-text-center">
        <p>Nessun elemento da visualizzare</p>
<?php endif; ?>
        <a href="<?= Url::toHome() ?>" class="uk-button uk-button-default">Indietro</a>
    </div>

<?= include("components/my-footer.php") ?>