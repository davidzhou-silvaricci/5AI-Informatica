<?php

include("autoloader.php");

$articolo = new ArticoloSportivo();

if (isset($_POST["submit"]))
    $articolo->add($_POST);

if (isset($_POST["update"]))
    $articolo->update($_POST["quantita"], $_POST["id"]);

if (isset($_GET["sell"]))
    $articolo->sell($_GET["sell"]);

if (isset($_GET["delete"]))
    $articolo->delete($_GET["delete"]);

if (isset($_GET["reset"]))
    $articolo->reset();

$lista = $articolo->getArticoli();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Magazzino sportivo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css" />
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="uk-container uk-container-xsmall uk-padding-large">
        <div class="uk-flex">
            <a class="uk-button uk-button-default uk-button-large uk-width-1-1" href="<?= Url::toReset() ?>">Svuota</a>
            <a class="uk-button uk-button-default uk-button-large uk-width-1-1 uk-margin-left" href="<?= Url::toRifornimento() ?>">Rifornimento</a>
            <a class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-left" href="<?= Url::toForm() ?>">Aggiungi</a>
        </div>
        <?php while ($obj = $lista->fetch_object()) : ?>
            <div class="uk-card uk-card-default uk-card-body uk-margin">
                <div class="uk-card-badge uk-label">€ <?= $obj->prezzo ?></div>
                <h3 class="uk-card-title"><?= $obj->nome ?></h3>
                <p>Quantità disponibile: <?= $obj->quantita ?></p>
                <?php if ($obj->quantita != 0) : ?>
                    <a href="<?= Url::urlSell($obj->id_articolo) ?>" class="uk-button uk-button-primary">Diminuisci</a>
                <?php else : ?>
                    <button class="uk-button uk-button-default" disabled>Non disponibile</button>
                <?php endif; ?>
                <a href="<?= Url::urlUpdate($obj->id_articolo, true) ?>" class="uk-button uk-button-default uk-margin-small-left">Modifica</a>
                <a href="<?= Url::urlDelete($obj->id_articolo) ?>" class="uk-button uk-button-default uk-margin-small-left">Elimina</a>
            </div>
        <?php endwhile; ?>
        <?php if ($lista->num_rows === 0) : ?>
            <div class="uk-card uk-card-default uk-card-body uk-margin uk-text-center">
                <p>Nessun articolo da visualizzare</p>
            </div>
        <?php endif; ?>
    </div>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit.min.js" integrity="sha512-OZ9Sq7ecGckkqgxa8t/415BRNoz2GIInOsu8Qjj99r9IlBCq2XJlm9T9z//D4W1lrl+xCdXzq0EYfMo8DZJ+KA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js" integrity="sha512-hcz3GoZLfjU/z1OyArGvM1dVgrzpWcU3jnYaC6klc2gdy9HxrFkmoWmcUYbraeS+V/GWSgfv6upr9ff4RVyQPw==" crossorigin="anonymous"></script>
</body>

</html>