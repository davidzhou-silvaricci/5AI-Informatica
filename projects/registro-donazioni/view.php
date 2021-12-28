<?php

include("autoloader.php");

if (isset($_GET["id"])) {
    $donazione = new Donazione();
    if (isset($_GET["ente"]))
        $donazione->update(["id" => $_GET["id"], "ente" => $_GET["ente"]]);
    $obj = $donazione->load($_GET["id"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= isset($obj->id) ? "Donazione $obj->id" : "Non trovato" ?> - Registro donazioni</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css" />
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="uk-container uk-container-xsmall uk-padding-large">
        <?php if ($obj !== null) : ?>
            <div class="uk-card uk-card-default uk-card-body uk-margin-medium">
                <div class="uk-card-badge">
                    <span class="uk-label">€ <?= number_format((float) $obj->importo, 2, ',', '.') ?></span>
                    <span class="uk-label"><?= $obj->anno ?></span>
                </div>
                <h3 class="uk-card-title">Donazione <?= $obj->id ?></h3>
                <p class="uk-text-primary">Ente - <?= Donazione::getEnte($obj->ente) ?></p>
                <p class="uk-margin-medium-bottom"><?= $obj->nota !== "" ? $obj->nota : "<i>Nessuna nota</i>" ?></p>
                <a href="<?= Url::toHome() ?>" class="uk-button uk-button-default">Indietro</a>
                <div class="uk-inline">
                    <button class="uk-button uk-button-primary uk-margin-small-left" type="button">Modifica ente</button>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <?php foreach (Donazione::ENTI as $k => $v) : ?>
                                <li><a href="<?= Url::urlEditEnte($obj->id, $k) ?>"><?= $v ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="uk-card uk-card-default uk-card-body uk-margin uk-text-center">
                <p>Nessuna donazione da visualizzare</p>
                <a href="<?= Url::toHome() ?>" class="uk-button uk-button-default">Indietro</a>
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