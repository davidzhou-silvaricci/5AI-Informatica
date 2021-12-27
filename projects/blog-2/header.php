<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista prodotti</title>
  <link rel="stylesheet" href="assets/css/foundation.css">
</head>
  <body>

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li> <a href="<?= Articolo::urlHome()?>">Home</a></li>
          <li><a href="<?= Articolo::urlAdd()?>">Inserisci un articolo</a></li>
          <li><a href="<?= Articolo::urlSvuota()?>">Cancella tutto</a></li>
        
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->

    <div class="callout large primary">
      <div class="row column text-center">
        <h1>Blog</h1>
        <h2 class="subheader"></h2>
      </div>
    </div>