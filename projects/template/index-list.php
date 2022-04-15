<?php

include("autoloader.php");

// 

$title = "Template";
include("components/my-header.php");

?>

<!-- Menu -->
<div class="uk-flex uk-margin-medium-bottom">
    <a class="uk-button uk-button-default uk-button-large uk-width-1-1" href="<?= Url::toReset() ?>">Svuota</a>
    <a class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-left" href="<?= Url::toForm() ?>">Aggiungi</a>
</div>

<!-- Lista -->
<?php // ciclo ?>
    <div class="uk-card uk-card-default uk-card-body uk-margin-medium">
        <div class="uk-card-badge">
            <span class="uk-label">Etichetta</span>
        </div>
        <h3 class="uk-card-title">Titolo</h3>
        <p class="uk-margin-medium-bottom">Descrizione</p>
        <a href="#" class="uk-button uk-button-primary">Pulsante 1</a>
        <a href="#" class="uk-button uk-button-default uk-margin-small-left">Pulsante 2</a>
    </div>
<?php // fine ciclo ?>
<?php if (true) : // sostituire 'true' con '($lista->num_rows === 0)' ?>
    <div class="uk-card uk-card-default uk-card-body uk-margin uk-text-center">
        <p>Nessun elemento da visualizzare</p>
    </div>
<?php endif; ?>

<?php include("components/my-footer.php") ?>
