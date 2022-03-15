<?php

include("autoloader.php");

$title = "Login - Sito";
include("components/my-header.php");

if(isset($_SESSION["username"])) {
    header("Location: " . Url::toHome());
    die();
}

$login = new Login();
$error = null;

if(isset($_POST["submit"]))
{
    $error = $login->accesso($_POST);

    if($error === false) {
        header("Location: " . Url::toHome());
        die();
    }
}

?>

<h3>Login</h3>

<form method="POST" action="<?= Url::toLogin() ?>" class="uk-form-horizontal uk-margin">
    <?php if($error): ?>
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>L'username o la password inseriti non sono corretti.</p>
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
    <p>Non hai un account? <a href="<?=Url::toRegistrazione()?>">Registrati</a></p>
    <!-- Submit -->
    <div class="uk-flex uk-flex-row uk-margin-medium">
        <a class="uk-button uk-button-default uk-button-large uk-width-1-2@s" href="<?= Url::toHome() ?>">Indietro</a>
        <input class="uk-button uk-button-primary uk-button-large uk-width-1-2@s uk-margin-left" type="submit" name="submit" value="Accedi">
    </div>
</form>

<?= include("components/my-footer.php") ?>