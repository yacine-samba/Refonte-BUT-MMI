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

  <main class="page-enseignements">

    <div class="d-flex-column">
      <h1>LES UNITÉS D'APPRENTISSAGES</h1>
      <p>Une formation publique postbac qui allie marketing digitale, développement et design.</p>
    </div>

    <div class="d-flex-column competences">
      <h2>Découvrez les 5 compétences acquise a la fin de cette formation</h2>
      <h3>Défiler pour voir les autres compétences</h3>

      <div id="slideshow" class="d-flex-column">
        <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-arrow-right"></i></a>


        <div class="slide active d-flex-column">
          <div class="d-flex-column">
            <i class="fa-solid fa-brain colorgrad"></i>
            <h2>Comprendre</h2>
            <h3>Comprendre les situations de communication, leur écosystème et les besoins des utilisateurs</h3>
            <p>Pour se situer et évoluer dans les modèles de l’information et de la communication (plan de communication, définition des supports, stratégies digitales).<br>

              Pour améliorer son expression orale, sa prise de notes et l’animation de réunions
              Pour se familiariser avec l’écriture pour les médias numériques (ergonomie Web, gestion de communautés, référencement).<br>

              Pour connaître et manier les outils qui permettent de comprendre l’environnement technologique du multimédia (image, son, vidéo).<br>

              Pour maîtriser la configuration d’un hébergement Web ou d’un réseau local (Webmail, CMS, blog)
            </p>
          </div>
        </div>

        <div class="slide d-flex-column">
          <div class="d-flex-column">
            <i class="fa-solid fa-users-gear colorgrad"></i>
            <h2>Concevoir</h2>
            <h3>Compétence clé pour réaliser des projet en MMI</h3>
            <p>Essentielle pour planifier et mettre en place les différentes étapes de la réalisation d'un produit multimédia de manière efficace, en prenant en compte les besoins de l'utilisateur et les contraintes techniques et ergonomiques.<br>

              Cela permet de garantir la qualité et l'expérience utilisateur dans la conception et la réalisation d'un projet en MMI.<br>

              Cette compétence est transversale et présente dans toutes les étapes de la vie d'un projet multimédia.
            </p>
          </div>
        </div>

        <div class="slide d-flex-column">
          <div class="d-flex-column">
            <i class="fa-solid fa-message-quote colorgrad"></i>
            <h2>Exprimer</h2>
            <h3>Transmettre un message avec les médias numériques pour informer et communiquer</h3>
            <p>Pour apprendre à maîtriser les principaux outils d’infographie (retouche photo et traitement d’images, création graphique 2D et 3D, fixe ou animée, dessin vectoriel, mise en page).<br>

              Pour acquérir une culture graphique qui permet de nourrir la créativité.<br>

              Pour acquérir les techniques de la photographie et de la production audiovisuelle (tournage, montage, compositing et effet spéciaux).
            </p>
          </div>
        </div>

        <div class="slide d-flex-column">
          <div class="d-flex-column">
            <i class="fa-solid fa-display-code colorgrad"></i>
            <h2>Développer</h2>
            <h3>Pour le web et les médias numériques</h3>
            <p>Pour être capable de développer un site web ou une application (Javascript, PHP et SQL).<br>
              Pour maîtriser l’intégration web (étude des langage HTML, CSS et les normes du Web).<br>

              Pour configurer et gérer des systèmes de gestions de contenus (CMS, Blog, sites marchands)<br>
              Pour relier et interfacer des services en ligne (authentification, réseaux sociaux, cartes et géolocalisation).
            </p>
          </div>
        </div>

        <div class="slide d-flex-column">
          <div class="d-flex-column">
            <i class="fa-solid fa-lightbulb-on colorgrad"></i>
            <h2>Entreprendre </h2>
            <h3>Pour le secteur du numérique</h3>
            <p>Pour construire son projet professionnel en fonction de ses aspirations personnelles.<br>
              Pour employer et adapter des notions en droit, économie, gestion et marketing au domaine de la communication numérique.<br>
              Pour apprendre à gérer et à conduire un projet.
            </p>
          </div>
        </div>

        <div class="slide d-flex-column">
          <div class="d-flex-column">
            <i class="fa-solid fa-arrows-to-circle colorgrad"></i>
            <h2>Comprendre</h2>
            <h3>Comprendre les situations de communication, leur écosystème et les besoins des utilisateurs</h3>
            <p>Pour se situer et évoluer dans les modèles de l’information et de la communication (plan de communication, définition des supports, stratégies digitales).<br>

              Pour améliorer son expression orale, sa prise de notes et l’animation de réunions
              Pour se familiariser avec l’écriture pour les médias numériques (ergonomie Web, gestion de communautés, référencement).<br>

              Pour connaître et manier les outils qui permettent de comprendre l’environnement technologique du multimédia (image, son, vidéo).<br>

              Pour maîtriser la configuration d’un hébergement Web ou d’un réseau local (Webmail, CMS, blog)
            </p>
          </div>
        </div>





      </div>


    </div>

    <div class="d-flex-column bglight firstyear">
      <h2>Comment se passe le déroulement de la 1ere année ?</h2>
      <div class="d-flex-column">
        <img class="imgil" src="img/mmi.png" alt="Image d'illustration  ">
        <div>
          <p>Le 1er semestre est consacré, en partie, à une remise à niveau générale sur les différentes thématiques abordées au cours du but ainsi qu’à l’acquisition d’une méthodologie de travail. Il aborde les notions de base dans chacun des modules enseignés et prépare l’étudiant à être autonome dans ses apprentissages tout au long de son parcours.</p>
          <p>Le deuxième semestre approfondit ces notions de base et introduit les matières du cœur de compétences MMI, le troisième semestre vise à la maîtrise de ces techniques et le quatrième est consacré à l’approche professionnalisante.</p>
        </div>
      </div>
    </div>

    <div class="d-flex-column modules">


      <h2>Les différents modules d’enseignements</h2>


      <?php
      // Sélection de toutes les entrées de la table modules
      $query = "SELECT * FROM modules";
      $result = $db->prepare($query);
      $result->execute();
      $modules = $result->fetchAll();


      foreach ($modules as $module) : ?>
        <div class="module">
          <h2><?php echo $module['nom']; ?></h2>
          <?php
          //   // Sélection de toutes les matières associées à ce module
          $query = "SELECT * FROM matieres WHERE id_module = " . $module['id_module'];
          $result = $db->prepare($query);
          $result->execute();
          $matieres = $result->fetchAll(); ?>
          <div>
            <?php foreach ($matieres as $matiere) : ?>


              <?php

              echo '<div class="matiere d-flex-column"><div class="d-flex-row module colorprm">' . $matiere['icon_matiere'] . '<h3>' . $matiere['nom_matiere'] . '</h3></div><p>' . $matiere['description_matiere'] . '</p><a class="btn" href="enseignement.php?id=' . $matiere['id_matiere'] . '">Voir plus</a></div>';

              ?>


            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
      <a class="btn-back2" href="./">
      <p>
        Retourner à l'accueil</p>
    </a>

  </main>

  <?php require("footer.php"); ?>

  <script src="js/script.js"></script>
</body>

</html>