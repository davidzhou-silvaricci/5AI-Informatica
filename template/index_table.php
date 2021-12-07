<?php

include("autoloader.php");

/*
if(isset($_GET["filter"]) && isset($_GET["by"]))
    $lista = $classe->getFilteredList($_GET["filter"], $_GET["by"]);
else $lista = Classe::getList();
*/

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