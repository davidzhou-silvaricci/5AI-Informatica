<?php

include('autoloader.php');

$listaArticoli = new ListaArticoli();

if (isset($_POST['submit'])) {
  $articolo = new Articolo();
  $articolo->create($_POST);
  $listaArticoli->save($articolo);
}

if (isset($_GET['delete'])) $listaArticoli->remove($_GET['delete']);
if (isset($_GET['restart'])) $listaArticoli->restart();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Blog</title>
  <link href="scrollbar.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container mx-auto p-8 min-h-screen mb-12">
    <div class="flex flex-col gap-4 fixed bottom-16 right-16">
      <a href="<?= $listaArticoli->urlForm(); ?>" class="h-16 w-16 flex items-center justify-center bg-green-200 text-green-800 rounded-full shadow-md shadow-green-200/50 transition duration-500 ease-in-out hover:shadow-none hover:bg-green-300 hover:text-green-900"><i class="fas fa-plus"></i></a>
      <a href="<?= $listaArticoli->urlRestart() ?>" class="h-16 w-16 flex items-center justify-center bg-green-200 text-green-800 rounded-full shadow-md shadow-green-200/50 transition duration-500 ease-in-out hover:shadow-none hover:bg-red-200 hover:text-red-800"><i class="fas fa-eraser"></i></a>
    </div>
    <h1 class="font-sans text-lg font-bold text-gray-700 uppercase my-12">Articoli</h1>
    <section id="lista-articoli" class="grid grid-cols-3 gap-6 grid-flow-row auto-rows-max">
      <?php foreach ($listaArticoli->lista() as $key => $value) : ?>
        <?php $articolo = unserialize($value); ?>
        <a href="<?= $listaArticoli->urlView($articolo->getId()); ?>" class="border border-black-500 cursor-pointer transition duration-500 ease-in-out hover:shadow-lg rounded-lg">
          <?php if ($articolo->getImg() !== false) : ?>
            <div class="h-48 overflow-hidden">
              <img src="<?= $articolo->getImg() ?>" alt="<?= $articolo->getImg() ?>" loading="lazy" class="rounded-t-lg object-cover object-center w-full h-full">
            </div>
          <?php endif; ?>
          <div class="p-8">
            <header>
              <h1 class="font-serif text-2xl mb-4 text-green-600 font-bold"><?= $articolo->getTitolo() ?></h1>
            </header>
            <section class="leading-relaxed text-gray-500">
              <?= $articolo->getTestoCorto() ?>
            </section>
          </div>
        </a>
      <?php endforeach; ?>
      <?php if (count($listaArticoli->lista()) === 0) : ?>
        <span class="text-gray-500">Nessun articolo pubblicato.</span>
      <?php endif; ?>
    </section>
  </div>
  <footer class="pt-8 pb-16 text-center text-gray-500 tracking-wide">Made with <i class="fas fa-heart"></i> in Italy</footer>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>