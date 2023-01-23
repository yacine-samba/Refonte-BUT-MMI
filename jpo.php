<?php
session_start();
include("connect.php");
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

<body>
  <?php require("header.php"); ?>

  <main class="jpo">
  <div class="d-flex-column">
    <h1><span class="colorgrad">JPO</span></h1>
    <h2>Journée portes ouvertes le 4 févirer 2023</h2>
    <a href="#start" class="btn">
      <p>Nous rejoindre</p>
    </a>
    <p id="start">A Tous les ans, la formation ouvre ses portes pour faire découvrir le monde de ses étudiants et transmettre l’esprit MMI.</p>
    <img class="imgil" src="img/3d-characters/marketing-campaign-3025712-2526910.png" alt="Image propagande">
    <p class="bglight">A l’occasion de celle-ci, vous pourrez venir vous entretenir avec des enseignants et des étudiants pour vous faire une vision sur l'ensemble du parcours, et il vous sera aussi présenter les projets des étudiant réaliser au cours de leurs études au sein de MMI. <br>La formation comprend du développement web, de la communication ainsi que de la création design vidéo… Une multitude de branche qui offre une polyvalence à ses étudiants. Vous serez accueillie et les bienvenue chez les MMI !
</p>
    <h3>Comment nous rejoindre ?</h3>
    <p>L'IUT de Gustave Eiffel est accessible par transport avec la ligne du RER A à 20 min de Paris.</p>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2224.2821242546747!2d2.5847756004331544!3d48.83718891317353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20de%20Marne-la-Vall%C3%A9e%20-%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sfr!4v1674058238264!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <a class="btn" href="./">
    Retourner à l'accueil </a>
  </main>

  <?php require("footer.php"); ?>
  <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->

  <script src="js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</body>

</html>