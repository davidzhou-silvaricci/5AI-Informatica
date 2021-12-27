<?php
include('autoloader.php');

$msg = "";

if(isset($_POST["reimposta"])) {
  Impostazioni::reset();
}

// Carico le impostazioni
$impostazioni = new Impostazioni();

if(isset($_POST["salva"])) {
  $impostazioni->update($_POST);
  $impostazioni->store();
}

if(isset($_GET["theme"])) {
  $impostazioni->load();
  $impostazioni->setTheme($_GET["theme"]);
  $impostazioni->store();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Impostazioni del sito</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        darkMode: 'class',
      }

      localStorage.theme = '<?= $impostazioni->getMode() ?>'
      
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.theme === 'dark') {
        document.documentElement.classList.add('dark')
      } else {
        document.documentElement.classList.remove('dark')
      }
    </script>
  </head>
  <body class="bg-white dark:bg-neutral-800">
    <div class="container mx-auto px-96 my-16 text-neutral-900 dark:text-neutral-200">
      <div class="flex flex-row items-top mb-10">
        <a href="index.php" class="flex justify-center items-center w-12 h-10 bg-white dark:bg-neutral-800 transition-colors hover:bg-neutral-100 dark:hover:bg-neutral-700 rounded-lg mr-4 cursor-pointer"><i class="fas fa-arrow-left"></i></a>
        <h1 class="text-3xl font-bold select-none">Impostazioni</h1>
      </div>

      <!-- Generazione dinamica di 6 elementi, combinazione tra i 3 colori e le due modalità -->
      <div class="grid grid-cols-3 gap-4">
        <?php foreach(array_keys(Impostazioni::THEMES) as $colore): ?>
          <a href="?theme=<?=$colore?>" class="<?= ($impostazioni->getTheme() === $colore) ? 'border-4 border-'.$colore.'-500' : 'border dark:border-neutral-600' ?> group bg-white dark:bg-neutral-800 rounded-lg p-4">
            <div class="flex gap-2">
              <div class="rounded-lg w-2/3 h-12 bg-<?=$colore?>-200 group-hover:bg-<?=$colore?>-300 dark:bg-<?=$colore?>-300 dark:group-hover:bg-<?=$colore?>-400"></div>
              <div class="rounded-lg w-1/3 h-12 bg-<?=$colore?>-100 group-hover:bg-<?=$colore?>-200 dark:bg-<?=$colore?>-200 dark:group-hover:bg-<?=$colore?>-300"></div>
            </div>
            <div class="mt-2 rounded-lg h-3 bg-<?=$colore?>-100 group-hover:bg-<?=$colore?>-200 dark:bg-<?=$colore?>-200 dark:group-hover:bg-<?=$colore?>-300"></div>
            <div class="mt-2 rounded-lg h-3 bg-<?=$colore?>-100 group-hover:bg-<?=$colore?>-200 dark:bg-<?=$colore?>-200 dark:group-hover:bg-<?=$colore?>-300"></div>
            <div class="mt-2 rounded-lg h-3 bg-<?=$colore?>-100 group-hover:bg-<?=$colore?>-200 dark:bg-<?=$colore?>-200 dark:group-hover:bg-<?=$colore?>-300"></div>
          </a>
        <?php endforeach; ?>
      </div>

      <hr class="my-8 border-0" />

      <form action="<?= $_SERVER['PHP_SELF']?>" method="POST" class="flex flex-col">

        <label for="tema" class="text-sm uppercase font-bold text-neutral-500 dark:text-neutral-300">Tema selezionato</label>
        <select name="theme" id="tema" class="h-12 bg-white dark:bg-neutral-800 mt-2 px-2 border dark:border-neutral-600 rounded-lg cursor-pointer">
          <?php foreach (Impostazioni::THEMES as $key => $item) : ?>

            <option <?= ($key == $impostazioni->getTheme()) ? " selected " : " " ?>value="<?= $key ?>"><?= $item ?></option>

          <?php endforeach ?>
        </select>

        <hr class="my-4 border-0" />

        <label for="voci" class="text-sm uppercase font-bold text-neutral-500 dark:text-neutral-300">Voci visualizzate per pagina</label>
        <input type="number" name="pages" id="voci" value="<?= $impostazioni->getPages() ?>" step="5" min="5" class="h-12 mt-2 px-3 border dark:border-neutral-600 rounded-lg cursor-pointer dark:bg-neutral-800">

        <hr class="my-4 border-0" />

        <label for="modalita" class="text-sm uppercase font-bold text-neutral-500 dark:text-neutral-300">Modalità</label>
        <fieldset id="modalita" class="mt-2 accent-<?=$impostazioni->getTheme()?>-300">
          <input <?= (Impostazioni::LIGHT == $impostazioni->getMode()) ? " checked " : " " ?> type="radio" value="<?= Impostazioni::LIGHT ?>" id="chiaro" name="mode" checked>
          <label for="chiaro" class="ml-1 mr-4">Chiaro</label>
          <input <?= (Impostazioni::DARK == $impostazioni->getMode()) ? " checked " : " " ?> type="radio" value="<?= Impostazioni::DARK ?>" id="scuro" name="mode">
          <label for="scuro" class="ml-1">Scuro</label>
        </fieldset>

        <hr class="my-4 border-0" />

        <label for="delete" class="text-sm uppercase font-bold text-neutral-500 dark:text-neutral-300">Cancellazione</label>
        <fieldset id="delete" class="mt-2 accent-<?=$impostazioni->getTheme()?>-300">
          <input <?= (Impostazioni::SOFT == $impostazioni->getDeleteType()) ? " checked " : " " ?> type="radio" value="<?= Impostazioni::SOFT ?>" id="soft" name="deleteType" checked>
          <label for="chiaro" class="ml-1 mr-4">Soft</label>
          <input <?= (Impostazioni::HARD == $impostazioni->getDeleteType()) ? " checked " : " " ?> type="radio" value="<?= Impostazioni::HARD ?>" id="hard" name="deleteType">
          <label for="scuro" class="ml-1">Hard</label>
        </fieldset>

        <div class="flex flex-row">
          <input type="submit" value="Reimposta" name="reimposta" class="h-12 mt-8 mr-4 rounded-lg px-8 cursor-pointer border dark:border-neutral-600 transition-colors hover:bg-neutral-100 dark:hover:bg-neutral-700">
          <input type="submit" value="Salva" name="salva" class="h-12 mt-8 mr-4 rounded-lg px-8 cursor-pointer bg-<?=$impostazioni->getTheme()?>-200 text-<?=$impostazioni->getTheme()?>-700 dark:bg-<?=$impostazioni->getTheme()?>-300 dark:text-<?=$impostazioni->getTheme()?>-800 transition-colors hover:bg-<?=$impostazioni->getTheme()?>-300 hover:text-<?=$impostazioni->getTheme()?>-800 dark:hover:bg-<?=$impostazioni->getTheme()?>-400 dark:hover:text-<?=$impostazioni->getTheme()?>-900">
        </div>

      </form>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
  </body>
</html>