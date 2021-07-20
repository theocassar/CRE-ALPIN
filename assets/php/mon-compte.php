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
  <link rel="icon" type="image/png" href="../../src/img/logo-couleur-vectorisé.svg" />
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

    <form action="verification.php" method="POST">
      <h1>Connexion</h1>

      <label><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

      <label><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="password" required>

      <input type="submit" id='submit' value='LOGIN'>
      <?php
      if (isset($_GET['erreur'])) {
        $err = $_GET['erreur'];
        if ($err == 1 || $err == 2)
          echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
      }
      ?>
    </form>
  </main>

  <script src="../../assets/js/main.js" defer></script>

</body>

</html>
