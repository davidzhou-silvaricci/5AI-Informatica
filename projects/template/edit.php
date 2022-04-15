<?php

include("autoloader.php");

/*
if (isset($_GET["id"])) {
    $classe = new Classe();
    $obj = $classe->load($_GET["id"]);
}
*/

$title = "Modifica elemento" . (isset($_GET["id"]) ? $_GET["id"] : "") . "- Template";
include("components/my-header.php");

?>

<?php if (isset($obj) && !empty($obj)) : ?>
    <form method="POST" action="<?= Url::toHome() ?>" class="uk-form-horizontal uk-margin">
        <input type="hidden" id="id" name="id" value="<?= $obj->id ?>">
        <!-- Text -->
        <div class="uk-margin">
            <label class="uk-form-label" for="">Text</label>
            <div class="uk-form-controls">
                <input type="text" class="uk-input" id="" name="" placeholder="<?= $obj->value ?>" value="<?= $obj->value ?>" required>
            </div>
        </div>
        <!-- Number -->
        <div class="uk-margin">
            <label class="uk-form-label" for="">Number</label>
            <div class="uk-form-controls">
                <input type="number" class="uk-input" id="" name="" placeholder="<?= $obj->value ?>" value="<?= $obj->value ?>" required>
            </div>
        </div>
        <!-- Select -->
        <div class="uk-margin">
            <label class="uk-form-label" for="">Select</label>
            <div class="uk-form-controls">
                <select class="uk-select" id="" name="" required>
                    <?php // foreach (Classe::COSTANTE as $k => $v) : ?>
                        <?php if (true) : ?>
                            <option value="" selected><?= $obj->v ?></option>
                        <?php else : ?>
                            <option value=""><?= $obj->v ?></option>
                        <?php endif; ?>
                    <?php // endforeach; ?>
                </select>
            </div>
        </div>
        <!-- Textarea -->
        <div class="uk-margin">
            <label class="uk-form-label" for="">Textarea</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" id="" name="" rows="2" maxlength="100" placeholder="<?= $obj->value ?>" value="<?= $obj->value ?>" required></textarea>
            </div>
        </div>
        <!-- Submit -->
        <div class="uk-flex uk-flex-row uk-margin-medium">
            <a class="uk-button uk-button-default uk-button-large uk-width-1-2@s" href="<?= Url::toHome() ?>">Indietro</a>
            <input class="uk-button uk-button-primary uk-button-large uk-width-1-2@s uk-margin-left" type="submit" name="submit" value="Aggiungi">
        </div>
    </form>
<?php else : ?>
    <div class="uk-card uk-card-default uk-card-body uk-margin uk-text-center">
        <p>Nessun elemento da modificare</p>
        <a href="<?= Url::toHome() ?>" class="uk-button uk-button-default">Indietro</a>
    </div>
<?php endif; ?>

<?php include("components/my-footer.php") ?>
