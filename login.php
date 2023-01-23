<?php
session_start();
include("connect.php");

  if (isset($_SESSION["login"])) {
    header("Location: admin.php");
    exit;
};
  
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BUT MMI - IUT de Champs sur Marne</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" />

</head>

<body class="bgcolor">
  



  <main class="login-admin">


    <h1>Ravi de vous revoir !</h1>
    <!-- Formulaire de connexion -->
    <form action="process_login.php" class="d-flex-column" method="post">
        <input type="text" id="login" name="login" placeholder="Identifiant">
        <input type="password" name="password" placeholder="Mot de passe">
      <input class="btnsubmit" type="submit" id="password" name="submitlogin" value="Se connecter">
      <?php
      if (isset($_GET['error'])) {
        switch ($_GET['error']) {
          case 'user_not_found':
            echo "<p>Utilisateur introuvable</p>";
            break;
          case 'incorrect_password':
            echo "<p>Mot de passe inccorect</p>";
        }
      }
      ?>
    </form>


  </main>



  </main>

</body>

<script src="js/script.js"></script>

</html>