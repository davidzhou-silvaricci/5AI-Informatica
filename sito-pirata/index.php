<?php
include('autoloader.php');

// Se ricevo il parametro tipo, filtro, se professione, porto ad una nuova pagina (?)
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
          <a href="<?= Url::viewSoftware(0) ?>" class="transition-colors hover:text-gray-400">Sistema Operativo</a>
          <a href="<?= Url::viewSoftware(1) ?>" class="transition-colors hover:text-gray-400">Grafica</a>
          <a href="<?= Url::viewSoftware(2) ?>" class="transition-colors hover:text-gray-400">Giochi</a>
        </div>
        <p class="uppercase font-bold text-sm text-gray-500 mt-8">Professione clienti</p>
        <hr class="my-2" />
        <div class="flex flex-col gap-2 px-4 py-2 text-gray-600">
          <!-- Generazione automatica dei filtri -->
          <a href="<?= Url::viewClienti(0) ?>" class="transition-colors hover:text-gray-400">Informatico</a>
          <a href="<?= Url::viewClienti(1) ?>" class="transition-colors hover:text-gray-400">Studente</a>
          <a href="<?= Url::viewClienti(2) ?>" class="transition-colors hover:text-gray-400">Altro</a>
        </div>
      </div>
      <div class="col-span-4">
        <div class="bg-gray-100 h-20">Elemento placeholder</div>
        <div class="bg-gray-100 h-20">Elemento placeholder</div>
        <div class="bg-gray-100 h-20">Elemento placeholder</div>
      </div>
    </div>

    <!-- Visualizzare l'elenco del software e un menu con le tipologie,
      cliccando su una si filtra il contenuto. -->
  </div>
</body>

</html>