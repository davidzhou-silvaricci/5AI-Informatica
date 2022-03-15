<?php

include("autoloader.php");

$title = "Login";
include("components/my-header.php");

?>

<h3>Accedi</h3>

<form method="POST" action="<?= Url::toHome() ?>" class="uk-form-horizontal uk-margin">
    <div class="uk-margin">
        <label class="uk-form-label" for="">Username</label>
        <div class="uk-form-controls">
            <input type="text" class="uk-input" id="user" name="user" required>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="">Password</label>
        <div class="uk-form-controls">
            <input type="password" class="uk-input" id="pass" name="pass" minlength="8" required>
        </div>
    </div>
    <p>Non hai un account? <a href="<?=Url::toRegistrazione()?>">Registrati</a></p>
    <!-- Submit -->
    <div class="uk-flex uk-flex-row uk-margin-medium">
        <a class="uk-button uk-button-default uk-button-large uk-width-1-2@s" href="<?= Url::toHome() ?>">Indietro</a>
        <input class="uk-button uk-button-primary uk-button-large uk-width-1-2@s uk-margin-left" type="submit" name="submit" value="Aggiungi">
    </div>
</form>

<?= include("components/my-footer.php") ?>