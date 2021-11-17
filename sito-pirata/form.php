<?php
include('autoloader.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Form - Sito pirata</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container px-8 mx-auto py-16 min-h-screen">
        <div class="flex flex-row items-top mb-10">
            <a href="<?= Url::toHome() ?>" class="flex justify-center items-center w-12 h-10 bg-white transition-colors hover:bg-gray-100 rounded-lg mr-4"><i class="fas fa-arrow-left"></i></a>
            <h1 class="text-3xl font-bold">Inserimento</h1>
        </div>
        
        <form method="POST" action="<?= Url::toHome() ?>">

        </form>
    </div>
  </body>
</html>