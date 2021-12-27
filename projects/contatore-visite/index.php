<?php
include('autoloader.php');

$message = "";

if(isset($_GET["reset"])) {
  $count = 0;
  $message .= Visita::reset();
}
else {
  // Si potrebbe fare la classe Contatore
  
  // Creo l'oggetto visita e l'aggiungo alla sessione
  $visita = new Visita();
  $visita->add();

  // Recupero il conto dalla sessione e lo aumento di 1
  $count = $_SESSION["conto"];
  $count++;

  // Aggiorno il conto in sessione
  $_SESSION["conto"] = $count;
}
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
    <div class="container relative px-8 mx-auto py-16 h-screen flex justify-center items-center flex-col w-full sm:w-4/5 lg:w-3/5 xl:w-1/2 2xl:w-2/5">
      <h3 class="uppercase font-medium text-gray-500">Visite al sito</h3>
      <span class="border border-gray-300 m-4 px-32 py-8 rounded-xl text-8xl font-bold w-full text-center"><?= $count ?></span>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 w-full">
        <button onclick="location.href='<?= $_SERVER['PHP_SELF'].'?reset=true' ?>';" class="border border-gray-300 rounded-xl px-8 py-4 w-full text-gray-700 transition-colors hover:bg-gray-50 font-medium">Reimposta</button>
        <button onclick="location.href='<?= str_replace('index.php', 'dettagli.php', $_SERVER['PHP_SELF']) ?>';" class="border border-green-300 bg-green-50 rounded-xl px-8 py-4 w-full font-medium transition-colors hover:bg-green-100 text-green-800">Dettagli</button>
      </div>
      <?= $message ?>
    </div>
  </body>
</html>