<?php

include("autoloader.php");

/*
if(isset($_GET["filter"]) && isset($_GET["by"]))
    $lista = $classe->getFilteredList($_GET["filter"], $_GET["by"]);
else $lista = Classe::getList();
*/

$title = "Template";
include("components/my-header.php");

?>

<!-- Menu -->
<div class="uk-flex uk-margin-medium-bottom">
    <div class="uk-inline uk-width-1-1">
        <button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button">Filtra</button>
        <div class="uk-width-1-1" uk-dropdown>
            <ul class="uk-nav uk-dropdown-nav">
                <li><a href="<?= Url::toHome() ?>">Tutti</a></li>
                <li class="uk-nav-header">Sezione</li>
                <li><a href="#">Elemento</a></li>
            </ul>
        </div>
    </div>
    <a class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-left" href="<?= Url::toForm() ?>">Aggiungi</a>
</div>

<!-- Tabella -->
<table class="uk-table uk-table-middle uk-table-responsive uk-table-hover uk-table-striped uk-table-divider">
    <thead>
        <tr>
            <th class="uk-table-expand">Dato</th>
            <th class="uk-width-small">Dato 2</th>
            <th class="uk-table-shrink">Azione</th>
        </tr>
    </thead>
    <tbody>
        <?php // ciclo ?>
            <tr>
                <td>Valore</td>
                <td>Valore</td>
                <td><a href="#" class="uk-button uk-button-default">Pulsante</a></td>
            </tr>
        <?php // fine ciclo ?>
    </tbody>
</table>
<?php if (true) : // sostituire 'true' con '($lista->num_rows === 0)' ?>
    <div class="uk-card uk-card-default uk-card-body uk-margin uk-text-center">
        <p>Nessun elemento da visualizzare</p>
    </div>
<?php endif; ?>

<?= include("components/my-footer.php") ?>