<?php

// var_dump($_SERVER);w

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow" />
  <meta name="description" content="Préserver la faune et la flaure du Mont-Blanc">
  <meta name="author" content="Théo Cassar" />
  <meta name="copyright" content="Théo Cassar" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon compte | CRE'ALPIN</title>
  <link rel="icon" type="image/png" href="../../src/img/logo-couleur-vectorise.svg" />
  <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body>
  <div class="header">
    <div class="nav">
      <div class="block-icon"><a href="../../index.php"><img src="../../src/img/home.svg" alt=""></a></div>
      <div class="block-icon"><a href="/index.php"><img src="../../src/img/square.svg" alt=""></a></div>
      <div class="block-icon"><a href="/index.php"><img src="../../src/img/search.svg" alt=""></a></div>
      <div class="block-icon"><button id="btn-burger" class="block-icon"><img src="../../src/img/icn-burger.svg" alt=""></button></div>
    </div>
  </div>

  <?php include '../../CRE-ALPIN/assets/php/header.php' ?>

  <main>
    <div class="logo-container">
      <a href="#"><img src="../../src/img/logo-couleur-vectorise.svg" alt="Logo CRE'LPIN"></a>
    </div>

    <h1>Connexion</h1>

    <form method="POST" action="./cible.php">

      <label for="nom_id">Votre nom</label>
      <input type="text" value="" name="NOM" id="nom_id">

      <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>

  </main>

  <script src="../../assets/js/main.js" defer></script>

</body>

</html>
