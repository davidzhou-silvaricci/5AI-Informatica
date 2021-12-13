<?php

include("autoloader.php");

$title = "Aggiungi un elemento - Template";
include("components/my-header.php");

?>

<form method="POST" action="<?= Url::toHome() ?>" class="uk-form-horizontal uk-margin">
    <!-- Text -->
    <div class="uk-margin">
        <label class="uk-form-label" for="">Text</label>
        <div class="uk-form-controls">
            <input type="text" class="uk-input" id="" name="" placeholder="" required>
        </div>
    </div>
    <!-- Number -->
    <div class="uk-margin">
        <label class="uk-form-label" for="">Number</label>
        <div class="uk-form-controls">
            <input type="number" class="uk-input" id="" name="" placeholder="" required>
        </div>
    </div>
    <!-- Select -->
    <div class="uk-margin">
        <label class="uk-form-label" for="">Select</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="" name="" required>
                <?php // foreach (Classe::COSTANTE as $k => $v) : ?>
                    <option value=""><!-- $obj->v --></option>
                <?php // endforeach; ?>
            </select>
        </div>
    </div>
    <!-- Textarea -->
    <div class="uk-margin">
        <label class="uk-form-label" for="">Textarea</label>
        <div class="uk-form-controls">
            <textarea class="uk-textarea" id="" name="" rows="2" maxlength="100" placeholder="" required></textarea>
        </div>
    </div>
    <!-- Submit -->
    <div class="uk-flex uk-flex-row uk-margin-medium">
        <a class="uk-button uk-button-default uk-button-large uk-width-1-2@s" href="<?= Url::toHome() ?>">Indietro</a>
        <input class="uk-button uk-button-primary uk-button-large uk-width-1-2@s uk-margin-left" type="submit" name="submit" value="Aggiungi">
    </div>
</form>

<?= include("components/my-footer.php") ?>