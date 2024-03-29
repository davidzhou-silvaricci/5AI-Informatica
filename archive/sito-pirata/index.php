<?php

include('autoloader.php');

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sito pirata</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container px-8 mx-auto py-16 min-h-screen">
    <h1 class="text-3xl font-bold mb-8">Sito pirata</h1>
    <div class="grid grid-cols-5 gap-8">
      <div>
        <a href="<?= Url::toForm() ?>" class="block flex justify-center items-center border py-3 bg-white font-medium transition-colors hover:bg-gray-100 rounded-lg">Aggiungi</a>
        <p class="uppercase font-bold text-sm text-gray-500 mt-8">Tipologia software</p>
        <hr class="my-2" />
        <div class="flex flex-col gap-2 px-4 py-2 text-gray-600">
          <!-- Generazione automatica dei filtri -->
          <a href="<?= Url::viewSoftware(0) ?>" class="transition-colors hover:text-gray-500">Sistema Operativo</a>
          <a href="<?= Url::viewSoftware(1) ?>" class="transition-colors hover:text-gray-500">Grafica</a>
          <a href="<?= Url::viewSoftware(2) ?>" class="transition-colors hover:text-gray-500">Giochi</a>
        </div>
        <p class="uppercase font-bold text-sm text-gray-500 mt-8">Professione clienti</p>
        <hr class="my-2" />
        <div class="flex flex-col gap-2 px-4 py-2 text-gray-600">
          <!-- Generazione automatica dei filtri -->
          <a href="<?= Url::viewClienti(0) ?>" class="transition-colors hover:text-gray-500">Informatico</a>
          <a href="<?= Url::viewClienti(1) ?>" class="transition-colors hover:text-gray-500">Studente</a>
          <a href="<?= Url::viewClienti(2) ?>" class="transition-colors hover:text-gray-500">Altro</a>
        </div>
      </div>
      <div class="col-span-4">
        <?php // ciclo ?>
          <div class="rounded-lg bg-gray-100 mb-6 p-8">Elemento placeholder</div>
        <?php //fine ciclo ?>
      </div>
    </div>
  </div>
</body>

</html>