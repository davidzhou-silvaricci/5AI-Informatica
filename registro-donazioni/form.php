<?php

include("autoloader.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fai una donazione - Registro donazioni</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css" />
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="uk-container uk-container-xsmall uk-padding-large">
        <form method="POST" action="<?= Url::toHome() ?>" class="uk-form-horizontal uk-margin">
            <div class="uk-margin">
                <label class="uk-form-label" for=""></label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="" name="" type="text" required>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for=""></label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="" name="" type="number" required>
                </div>
            </div>
            <div class="uk-flex uk-flex-row uk-margin-medium">
                <a class="uk-button uk-button-default uk-button-large uk-width-1-2@s" href="<?= Url::toHome() ?>">Indietro</a>
                <input class="uk-button uk-button-primary uk-button-large uk-width-1-2@s uk-margin-left" type="submit" name="submit" value="Aggiungi">
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit.min.js" integrity="sha512-OZ9Sq7ecGckkqgxa8t/415BRNoz2GIInOsu8Qjj99r9IlBCq2XJlm9T9z//D4W1lrl+xCdXzq0EYfMo8DZJ+KA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js" integrity="sha512-hcz3GoZLfjU/z1OyArGvM1dVgrzpWcU3jnYaC6klc2gdy9HxrFkmoWmcUYbraeS+V/GWSgfv6upr9ff4RVyQPw==" crossorigin="anonymous"></script>
</body>

</html>