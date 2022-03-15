<?php

include("autoloader.php");

$title = "Registrazione utente";
include("components/my-header.php");

$login = new Login();
$msg = "";
if(isset($_POST["submit"]))
    $msg = $login->registrazione($_POST);

?>

<h3>Registrazione</h3>

<form method="POST" action="<?= Url::toRegistrazione() ?>" class="uk-form-horizontal uk-margin">
    <?php if($msg !== ""): ?>
        <div class="<?= ($msg === "Registrazione effettuata.") ? "uk-alert-success" : "uk-alert-warning" ?>" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p><?=$msg?></p>
        </div>
    <?php endif; ?>
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
    <p>Hai già un account? <a href="<?=Url::toLogin()?>">Accedi</a></p>
    <!-- Submit -->
    <div class="uk-flex uk-flex-row uk-margin-medium">
        <a class="uk-button uk-button-default uk-button-large uk-width-1-2@s" href="<?= Url::toHome() ?>">Indietro</a>
        <input class="uk-button uk-button-primary uk-button-large uk-width-1-2@s uk-margin-left" type="submit" name="submit" value="Registrati">
    </div>
</form>

<?= include("components/my-footer.php") ?>