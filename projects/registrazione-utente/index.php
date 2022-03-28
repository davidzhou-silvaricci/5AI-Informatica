<?php

include("autoloader.php");

// controllo sessione

$title = "Home";
include("components/my-header.php");

$login = new Login();

if(isset($_GET["logout"]))
    $login->logout();

?>

<h3>Benvenuto<?= isset($_SESSION["username"]) ? ", " . $_SESSION["username"] . "!" : ", registrati o effettua l'accesso."; ?></h3>
<!--<h3>Benvenuto, # username </h3>-->

<!-- Menu -->
<div class="uk-flex uk-margin-medium-bottom">
    <?php if(isset($_SESSION["username"])): ?>
        <a class="uk-button uk-button-default uk-button-large uk-width-1-1" href="<?= Url::toLogout() ?>">Logout</a>
    <?php else: ?>
        <a class="uk-button uk-button-default uk-button-large uk-width-1-1" href="<?= Url::toRegistrazione() ?>">Registrati</a>
        <a class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-left" href="<?= Url::toLogin() ?>">Accedi</a>
    <?php endif; ?>
</div>

<?= include("components/my-footer.php") ?>