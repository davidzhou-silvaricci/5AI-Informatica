<?php
include('autoloader.php');

if(isset($_GET['delete'])) Visita::delete($_GET['delete']);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Contatore visite</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container px-8 mx-auto py-16 w-full h-screen sm:w-4/5 lg:w-3/5 xl:w-1/2 2xl:w-2/5">
      <div class="flex flex-row items-top mb-10">
        <button onclick="location.href='<?= str_replace('dettagli.php', 'index.php', $_SERVER['PHP_SELF']) ?>';" class="flex justify-center items-center w-12 h-10 bg-white transition-colors hover:bg-gray-100 rounded-lg mr-4"><i class="fas fa-arrow-left"></i></button>
        <h1 class="text-3xl font-bold">Dettagli</h1>
      </div>
      <h3 class="uppercase font-medium text-gray-500">Ultime 10 visite</h3>
      <div id="elenco">
        <!--<div class="flex border border-gray-300 mt-4 py-4 px-6 rounded-xl text-gray-500 transition-colors hover:border-gray-400">
          <span class="flex-auto">25/10/2021</span>
          <span class="flex-auto">Chrome</span>
          <span class="flex-auto">89.238.177.131</span>
          <button class="font-medium text-red-400 transition-colors hover:text-red-500">Elimina</button>
        </div>-->
        <?php
        // Visualizza le ultime dieci visite
        $i = 0;
        foreach (array_reverse($_SESSION["visite"]) as $key => $value) {
          $visita = unserialize($value);
          echo $visita->print_div();
          $i++;
          if($i==10) break;
        }
        if(count($_SESSION["visite"]) == 0) {
          echo Visita::print_placeholder();
        }
        ?>
      </div>
    </div>
  </body>
</html>