<?php
include('autoloader.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Aggiungi un prodotto - Sito pirata</title>
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
      <div class="grid grid-cols-2 gap-8">
        <div class="flex flex-col gap-4">
          <label for="nome">Nome prodotto</label>
          <input type="text" class="ring-1 ring-gray-200 p-4 rounded-lg outline-none text-gray-700 transition-colors hover:bg-gray-50 focus:ring-2 focus:ring-gray-300" name="nome" id="nome" placeholder="Nome prodotto" required>

          <label for="tipo" class="form-label">Categoria</label>
          <select name="tipo" id="tipo" class="bg-white ring-1 ring-gray-200 p-4 rounded-lg outline-none text-gray-700 hover:bg-gray-50 focus:ring-2 focus:ring-gray-300" required>
            <option value="0">Sistema operativo</option>
            <option value="1">Grafica</option>
            <option value="2">Giochi</option>
          </select>

          <label for="softwareHouse">Produttore</label>
          <select name="softwareHouse" id="softwareHouse" class="bg-white ring-1 ring-gray-200 p-4 rounded-lg outline-none text-gray-700 transition-colors hover:bg-gray-50 focus:ring-2 focus:ring-gray-300" required>
            <option value="MI">Microsoft</option>
            <option value="AP">Apple</option>
            <option value="GO">Google</option>
          </select>

          <label for="configurazione">Configurazione necessaria</label>
          <select name="configurazione" id="configurazione" class="bg-white ring-1 ring-gray-200 p-4 rounded-lg outline-none text-gray-700 transition-colors hover:bg-gray-50 focus:ring-2 focus:ring-gray-300" required>
            <option value="64">64 bit</option>
            <option value="32">32 bit</option>
          </select>

          <label for="provenienza">Sorgente</label>
          <input type="text" class="ring-1 ring-gray-200 p-4 rounded-lg outline-none text-gray-700 transition-colors hover:bg-gray-50 focus:ring-2 focus:ring-gray-300" name="provenienza" id="provenienza" placeholder="https://google.com" required>
        </div>
        <div class="flex flex-col gap-4">
          <label for="nickname">Nickname</label>
          <input type="text" class="ring-1 ring-gray-200 p-4 rounded-lg outline-none text-gray-700 transition-colors hover:bg-gray-50 focus:ring-2 focus:ring-gray-300" name="nickname" id="nickname" placeholder="Nickname" required>

          <label for="professione" class="form-label">Professione</label>
          <select name="professione" id="professione" class="bg-white ring-1 ring-gray-200 p-4 rounded-lg outline-none text-gray-700 hover:bg-gray-50 focus:ring-2 focus:ring-gray-300" required>
            <option value="0">Informatico</option>
            <option value="1">Studente</option>
            <option value="2">Altro</option>
          </select>

          <label for="email">E-mail</label>
          <input type="text" class="ring-1 ring-gray-200 p-4 rounded-lg outline-none text-gray-700 transition-colors hover:bg-gray-50 focus:ring-2 focus:ring-gray-300" name="email" id="email" placeholder="nickname@mail.com" required>
        </div>

        <button type="submit" id="submitSoftware" name="submitSoftware" class="mt-8 block flex justify-center items-center border py-4 bg-white font-medium transition-colors hover:bg-gray-100 rounded-lg">Crea</button>
      </div>
    </form>
  </div>
</body>

</html>