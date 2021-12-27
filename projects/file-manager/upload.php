<?php
include('autoloader.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Carica - File manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="container px-8 mx-auto py-16 min-h-screen">
      <div class="flex flex-row items-top mb-10">
        <a href="<?= str_replace('upload.php', 'index.php', $_SERVER['PHP_SELF']) ?>" class="flex justify-center items-center w-12 h-10 bg-white transition-colors hover:bg-slate-100 rounded-lg mr-4"><i class="fas fa-arrow-left"></i></a>
        <h1 class="text-3xl font-bold">Carica</h1>
      </div>
      <!--https://artisansweb.net/drag-drop-file-upload-using-javascript-php/-->
      <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false" class="border-4 border-dashed rounded-xl h-96 bg-slate-50 text-slate-400 border-slate-200 transition-colors hover:border-slate-300 select-none">
        <div id="drag_upload_file" class="flex justify-center items-center w-full h-full" onclick="file_explorer()">
          <div class="animate-pulse text-center">
            <p id="drop_zone_text" class="text-2xl font-black">Clicca o trascina qui i file</p>
            <p class="mt-2 uppercase font-medium text-sm">Solo file di testo o immagini</ip>
          </div>
          <input type="file" id="selectfile" class="hidden" multiple>
        </div>
      </div>
      <div id="elenco_upload" class="mt-8 grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 auto-rows-auto gap-6">
        <!-- Griglia dei file caricati -->
        
      </div>
      <script src="script.js"></script>
    </div>
  </body>
</html>