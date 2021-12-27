<?php
include('autoloader.php');

$file = new File();

if (isset($_GET["view"]) && isset($_SESSION["files"][$_GET["view"]])) {
  $viewFile = $file->view($_GET["view"]);
}

if (isset($_GET["download"])) {
  File::download($_GET["download"]);
}

if (isset($_GET["delete"]) && $_GET["delete"] === "all") {
  File::deleteAll();
}

$imagefiles = File::getImageFiles();
$textfiles = File::getTextFiles();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>File manager</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container px-8 mx-auto py-16 min-h-screen">
    <?php if (isset($viewFile)) : ?>
      <div class="flex justify-center items-center fixed inset-0 w-screen h-screen z-40">
        <a href="index.php" class="absolute inset-0 w-full h-full bg-slate-500/10 cursor-default"></a>
        <div class="w-96 p-8 border rounded-xl bg-white z-50">
          <div class="flex justify-between text-slate-500 mb-4">
            <span class="font-bold text-blue-500 uppercase">Dettagli</span>
            <button onclick="javascript:location.href='index.php'" class="transition-colors hover:text-slate-700"><i class="fas fa-times"></i></button>
          </div>
          <table class="table-fixed text-left text-slate-700">
            <tr>
              <th class="py-2 pr-8 align-top font-medium text-slate-900">Nome</th>
              <td class="py-2 break-words"><?= $viewFile->getName() ?></td>
            </tr>
            <tr>
              <th class="py-2 pr-8 align-top font-medium text-slate-900">Dimensione</th>
              <td class="py-2 break-words"><?= $viewFile->getSize() ?></td>
            </tr>
            <tr>
              <th class="py-2 pr-8 align-top font-medium text-slate-900">Tipologia</th>
              <td class="py-2 break-words"><?= $viewFile->getType() ?></td>
            </tr>
          </table>
          <a href="?download=<?= $viewFile->getName() ?>" class="block flex justify-center items-center border mt-4 py-3 text-slate-700 bg-white font-medium transition-colors hover:bg-blue-50 hover:border-blue-300 hover:text-blue-700 rounded-lg">Scarica</a>
        </div>
      </div>
    <?php endif; ?>
    <h1 class="text-3xl font-bold">File manager</h1>
    <div class="grid grid-cols-5 gap-8 mt-8">
      <div>
        <div class="sticky top-8 flex flex-col gap-2">
          <a href="<?= str_replace('index.php', 'upload.php', $_SERVER['PHP_SELF']) ?>" class="block flex justify-center items-center border py-3 bg-blue-500 text-blue-50 font-medium transition-colors hover:bg-blue-600 hover:text-blue-100 rounded-lg">Aggiungi</a>
          <a href="?delete=all" class="block flex justify-center items-center border py-3 text-slate-700 bg-white font-medium transition-colors hover:bg-red-50 hover:border-red-300 hover:text-red-700 rounded-lg">Svuota</a>
        </div>
      </div>
      <div class="col-span-4 text-slate-700">
        <?php if ($imagefiles === false and $textfiles === false) : ?>
          <div class="text-center rounded-lg select-none bg-slate-100 mb-4 p-8">Nessun file da visualizzare</div>
        <?php else : ?>
          <?php if (count($imagefiles) !== 0) : ?>
            <!-- Immagini -->
            <div class="grid grid-cols-3 gap-4">
              <?php foreach ($imagefiles as $file) : ?>
                <a href="?view=<?= $file->getId() ?>">
                  <div class="group relative flex flex-col justify-end h-56 rounded-xl overflow-hidden cursor-pointer">
                    <div id="filtro" class="absolute w-full h-full bg-black opacity-0 transition group-hover:opacity-50 z-10"></div>
                    <img class="w-full h-full object-cover object-center z-0" src="uploads/<?= $file->getName() ?>" alt="<?= $file->getName() ?>">
                    <div class="absolute p-4 z-20">
                      <p class="text-white filter drop-shadow-md font-bold transition opacity-0 group-hover:opacity-100 break-word"><?= $file->getName() ?></p>
                    </div>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if (count($textfiles) !== 0) : ?>
            <?php if (count($imagefiles) !== 0) : ?>
              <hr class="border-slate-100 my-8" />
            <?php endif; ?>
            <!-- Altri file -->
            <div class="grid grid-cols-3 gap-4">
              <?php foreach ($textfiles as $file) : ?>
                <a href="?view=<?= $file->getId() ?>">
                  <div class="flex justify-between rounded-lg bg-slate-100 hover:bg-blue-100 hover:text-blue-700 mb-4 p-8 cursor-pointer"><?= $file->getName() ?></div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>

</html>