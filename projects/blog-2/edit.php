<?php

include('autoloader.php');

$listaArticoli = new ListaArticoli();

if (isset($_GET["id"])) {
  $articolo = new Articolo();
  $success = $articolo->load($_GET["id"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Modifica - Blog</title>
  <link href="scrollbar.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container mx-auto px-96 py-8 box-border min-h-screen mb-12">
    <?php if ($success) : ?>
      <h1 class="font-sans text-lg font-bold text-gray-700 uppercase my-12">Modifica</h1>
      <form action="<?= $listaArticoli->urlView($articolo->getId()) ?>" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center align-center">
        <input type="hidden" id="id" name="id" value="<?= $articolo->getId() ?>">
        <label class="font-medium text-gray-700" for="titolo">Titolo</label>
        <input class="mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-md outline-0 focus:border-transparent focus:ring focus:ring-green-500/25" type="text" id="titolo" name="titolo" placeholder="Titolo" value="<?= $articolo->getTitolo() ?>" required>
        <label class="font-medium text-gray-700" for="testo">Contenuto</label>
        <textarea class="mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-md outline-0 focus:border-transparent focus:ring focus:ring-green-500/25" id="testo" name="testo" rows="8" cols="50" placeholder="C'era una volta..." required><?= $articolo->getTesto() ?></textarea>

        <div class="flex mt-6">
          <a href="<?= $listaArticoli->urlView($articolo->getId()) ?>" class="px-8 py-4 text-gray-700 rounded-md border border-gray-300 transition duration-500 ease-in-out mr-2 hover:bg-gray-100 hover:text-gray-800">Indietro</a>
          <input type="submit" name="submit" value="Salva" class="px-8 py-4 bg-green-200 text-green-800 rounded-md shadow-lg shadow-green-200/50 cursor-pointer transition duration-500 ease-in-out hover:shadow-none hover:text-green-900 hover:bg-green-300 ml-2">
        </div>
      </form>
    <?php else : ?>
      <div class="flex gap-4 fixed bottom-16 right-16">
        <a href="<?= $listaArticoli->urlBlog(); ?>" class="h-16 w-16 flex items-center justify-center bg-green-200 text-green-800 rounded-full shadow-md shadow-green-200/50 transition duration-500 ease-in-out hover:shadow-none hover:bg-green-300 hover:text-green-900"><i class="fas fa-home"></i></a>
      </div>
      <p class="text-gray-500 mt-12">Nessun articolo trovato.</p>
    <?php endif; ?>
  </div>
  <footer class="pt-8 pb-16 text-center text-gray-500 tracking-wide">Made with <i class="fas fa-heart"></i> in Italy</footer>
</body>

</html>