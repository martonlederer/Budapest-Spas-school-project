<?php

  require '../src/class/SpaInfoLoader.php';

 ?>

<!doctype html>
<html>

  <head>

    <meta charset="utf-8">

    <title>Fürdőkereső</title>

    <link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Zsombi és Marci projektje">
    <meta name="theme-color" content="#23B870">

    <link rel="stylesheet" href="<?php echo (strpos($_SERVER['REQUEST_URI'], 'furdo') !== false) ? '../' : '' ?>assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js"></script>

  </head>

  <body>
