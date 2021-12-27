<?php
include('autoloader.php');
$listaArticoli = new ListaArticoli();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Pubblica un articolo - Blog</title>
    <link href="scrollbar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="container mx-auto px-96 py-8 box-border min-h-screen mb-12"> 
      <h1 class="font-sans text-lg font-bold text-gray-700 uppercase my-12">Pubblica un articolo</h1>
      <form action="index.php" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center align-center">
        <label class="font-medium text-gray-700" for="upload">Inserisci una copertina</label>
        <div class="flex flex-col mt-2 mb-6">
          <div class="hidden shrink-0 h-96 rounded-xl overflow-hidden">
            <img id="preview" class="w-full h-full object-cover object-center" src="" alt="Copertina" />
          </div>
          <label class="block mt-2">
            <span class="sr-only">Inserisci una copertina</span>
            <input type="file" id="image" name="image" class="block w-full text-sm text-gray-500
              file:mr-4 file:py-2 file:px-4
              file:rounded-full file:border-0
              file:text-sm file:font-medium
              file:bg-orange-50 file:text-orange-700
              file:transition-colors
              hover:file:bg-orange-100
            " required/>
          </label>
        </div>
        <label class="font-medium text-gray-700" for="titolo">Titolo</label>
        <input class="mt-2 mb-6 px-3 py-2 text-gray-800 border rounded-md outline-0 focus:border-transparent focus:ring focus:ring-green-500/25" type="text" id="titolo" name="titolo" placeholder="Titolo" required>
        <label class="font-medium text-gray-700" for="testo">Contenuto</label>
        <textarea class="mt-2 mb-6 px-3 py-2 text-gray-800 border rounded-md outline-0 focus:border-transparent focus:ring focus:ring-green-500/25" id="testo" name="testo" rows="8" cols="50" placeholder="C'era una volta..." required></textarea>
        
        <div class="flex mt-6">
          <a href="<?= $listaArticoli->urlBlog() ?>" class="px-8 py-4 text-gray-700 rounded-md border border-gray-300 transition duration-500 ease-in-out mr-2 hover:bg-gray-100 hover:text-gray-800">Torna alla home</a>
          <input type="submit" name="submit" value="Pubblica" class="px-8 py-4 bg-green-200 text-green-800 rounded-md shadow-lg shadow-green-200/50 cursor-pointer transition duration-500 ease-in-out hover:shadow-none hover:text-green-900 hover:bg-green-300 ml-2">
        </div>
      </form>
    </div>
    <footer class="pt-8 pb-16 text-center text-gray-500 tracking-wide">Made with <i class="fas fa-heart"></i> in Italy</footer>
    <script>
      document.getElementById("image").addEventListener("change", (event) => {
        const image = document.getElementById("preview");
        image.src = URL.createObjectURL(event.target.files[0]);
        image.onload = function() {
          URL.revokeObjectURL(image.src) // free memory
          document.getElementById("image").parentNode.classList.remove("mt-2");
          document.getElementById("image").parentNode.classList.add("mt-4");
          image.parentNode.classList.remove("hidden");
        }
      });
    </script>
  </body>
</html>
