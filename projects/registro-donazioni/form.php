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
                <label class="uk-form-label" for="importo">Importo (€)</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="importo" name="importo" type="number" placeholder="1.00" min="1" step="0.01" required>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="ente">Ente destinatario</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="ente" name="ente">
                        <?php foreach (Donazione::ENTI as $k => $v) : ?>
                            <option value="<?= $k ?>"><?= $v ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="anno">Anno della donazione</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="anno" name="anno" type="number" min="1970" max="<?= date("Y"); ?>" placeholder="<?= date("Y"); ?>" required>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="nota">Eventuale nota</label>
                <div class="uk-form-controls">
                    <textarea class="uk-textarea" rows="2" id="nota" name="nota" maxlength="100"></textarea>
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