<?php

if (!isset($_SESSION))
  include("autoloader.php");

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impresa Srl</title>
  <link rel="stylesheet" href="assets/css/foundation.css">
</head>

<body>

  <!-- Start Top Bar -->
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li> <a href="<?= Url::toHome() ?>">Liste interventi </a></li>
        <li><a href="<?= Url::toForm() ?>">Aggiungi intervento</a></li>
        <li><a href="#">Ricerca interventi</a></li>
      </ul>
    </div>
  </div>
  <!-- End Top Bar -->

  <div class="callout large success">
    <div class="row column text-center">
      <h1>Impresa SRL</h1>
      <h2 class="subheader"></h2>
    </div>
  </div>