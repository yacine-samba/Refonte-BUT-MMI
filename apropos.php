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
  
<?php require("header.php");?>


<main class="apropos">

    <h1 class="colorgrad">Voici notre équipe</h1>

    <p>Nous avons réalisé ce site web dans le cadre d'un projet étudiant de 2e année, visant à faire la refonte de site web actuel. de <a href="http://www.dut-mmi-champs.fr/">MMI CHAMPS.</a></p>

    <h2>Voici les membres :</h2>

    <div class="d-flex-column membres">

    <div class="d-flex-column">
      <img src="img/equipe/martin.png" alt="Avatar de l'équipe">
      <h3 class="colorcrea">Martin Chambaudry</h3>
      <h4>Chef de projet & UX/UX Designer</h4>
      <p>Passionné par le marketing digital et la communication web.</p>
    </div>

    <div class="d-flex-column">
      <img src="img/equipe/yacine.png" alt="Avatar de l'équipe">
      <h3 class="colordev">Yacine Samba</h3>
      <h4>Développeur Full-Stack</h4>
      <p>Autoentrepreneur de la marque Utopic Wrld, passionné et spécialisé dans le domaine du développement web.</p>
    </div>

    <div class="d-flex-column">
      <img src="img/equipe/belkacem.png" alt="Avatar de l'équipe">
      <h3 class="colorcrea">Belkacem Mahri</h3>
      <h4>Rédacteur web & Graphiste</h4>
      <p>Passionné et spécialisé dans le domaine du montage vidéo (Premiere pro, After effect).</p>
    </div>

    <div class="d-flex-column">
      <img src="img/equipe/loic.png" alt="Avatar de l'équipe">
      <h3 class="colorcrea">Loïc Priso</h3>
      <h4>UI Designer & Chargé de rédaction</h4>
      <p>Passionné par la production musicale, Beatmaker (Production musicale assisté par ordinateur).</p>
    </div>
    
    </div>
    <div class="d-flex-column">
    <a class="btn" href="./">
      <p>Retourner à la page d'accueil</p>
    </a>
    </div>
</main>



<?php require("footer.php"); ?>
  <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->

  <script src="js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</body>

</html>