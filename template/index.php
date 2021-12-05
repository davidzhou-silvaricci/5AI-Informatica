<?php

include("autoloader.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css" />
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="uk-container uk-container-xsmall uk-padding-large">
        <div class="uk-flex">
            <a class="uk-button uk-button-default uk-button-large uk-width-1-1" href="<?= Url::toReset() ?>">Svuota</a>
            <a class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-left" href="<?= Url::toForm() ?>">Aggiungi</a>
        </div>
        <?php // ciclo ?>
            <div class="uk-card uk-card-default uk-card-body uk-margin">
                <div class="uk-card-badge uk-label"></div>
                <h3 class="uk-card-title"></h3>
                <p></p>
                <a href="#" class="uk-button uk-button-default uk-margin-small-left"></a>
            </div>
        <?php // fine ciclo ?>
        <?php if (true) : ?>
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