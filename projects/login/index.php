<?php

include("autoloader.php");

// controllo sessione

$title = "Home";
include("components/my-header.php");

?>


<h3>Benvenuto</h3>

<!-- Menu -->
<div class="uk-flex uk-margin-medium-bottom">
    <a class="uk-button uk-button-default uk-button-large uk-width-1-1" href="<?= Url::toRegistrazione() ?>">Registrazione</a>
    <a class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-left" href="<?= Url::toLogin() ?>">Login</a>
</div>
<!--<h3>Benvenuto, # username </h3>-->
<!-- Disconnessione -->

<?= include("components/my-footer.php") ?>