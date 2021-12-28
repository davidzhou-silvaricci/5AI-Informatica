<?php

include('autoloader.php');

$listaArticoli = new ListaArticoli();

if (isset($_POST['submit'])) {
  $articolo = new Articolo();
  $articolo->update($_POST);
}

if (isset($_GET["id"])) {
  $articolo = new Articolo();
  $success = $articolo->load($_GET["id"]);
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?= (isset($articolo)) ? $articolo->getTitolo() . " - " : "" ?>Blog</title>
  <link href="scrollbar.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container mx-auto px-96 py-8 min-h-screen mb-12">
    <?php if ($success) : ?>
      <div class="flex flex-col gap-4 fixed bottom-16 right-16">
        <a href="<?= $listaArticoli->urlBlog(); ?>" class="h-16 w-16 flex items-center justify-center bg-green-200 text-green-800 rounded-full shadow-md shadow-green-200/50 transition duration-500 ease-in-out hover:shadow-none hover:bg-green-300 hover:text-green-900"><i class="fas fa-home"></i></a>
        <a href="<?= $listaArticoli->urlEdit($articolo->getId()); ?>" class="h-16 w-16 flex items-center justify-center bg-green-200 text-green-800 rounded-full shadow-md shadow-green-200/50 transition duration-500 ease-in-out hover:shadow-none hover:bg-green-300 hover:text-green-900"><i class="fas fa-edit"></i></a>
        <a href="<?= $listaArticoli->urlDelete($articolo->getId()) ?>" class="h-16 w-16 flex items-center justify-center bg-green-200 text-green-800 rounded-full shadow-md shadow-green-200/50 transition duration-500 ease-in-out hover:shadow-none hover:bg-red-200 hover:text-red-800"><i class="fas fa-trash-alt"></i></a>
      </div>
      <h1 class="text-5xl font-bold text-green-600 mt-12 mb-8"><?= (isset($articolo)) ? $articolo->getTitolo() : "" ?></h1>
      <article>
        <section class="text-xl leading-loose text-gray-700 font-serif">
          <?= $articolo->getTesto() ?>
        </section>
      </article>
    <?php else : ?>
      <div class="flex gap-4 fixed bottom-16 right-16">
        <a href="<?= $listaArticoli->urlBlog(); ?>" class="h-16 w-16 flex items-center justify-center bg-green-200 text-green-800 rounded-full shadow-md shadow-green-200/50 transition duration-500 ease-in-out hover:shadow-none hover:bg-green-300 hover:text-green-900"><i class="fas fa-home"></i></a>
      </div>
      <p class="text-gray-500 mt-12">Nessun articolo trovato.</p>
    <?php endif; ?>
  </div>
  <footer class="pt-8 pb-16 text-center text-gray-500 tracking-wide">Made with <i class="fas fa-heart"></i> in Italy</footer>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>