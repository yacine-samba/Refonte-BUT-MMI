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

  <main class="page-enseignement">

    <?php
    // Récupération de l'ID de la matiere à afficher
    $id_matiere = $_GET['id'];

    // Récupération des informations de la matiere
    $query = "SELECT * FROM matieres WHERE id_matiere = $id_matiere";
    $result = $db->prepare($query);
    $result->execute();
    $matiere = $result->fetch();

    // Récupération des projets
    $query = "SELECT projets.*, images.file_name FROM projets LEFT JOIN images ON projets.id_projet = images.id_projet WHERE id_matiere = $id_matiere GROUP BY projets.id_projet ORDER BY projets.date_creation DESC ";
    $result = $db->prepare($query);
    $result->execute();
    $projets = $result->fetchAll();

    // Récupération des enseignant liés à la matiere
    $query = "SELECT * FROM equipe WHERE id_matiere = $id_matiere";
    $result = $db->prepare($query);
    $result->execute();
    $equipe = $result->fetchAll();
    ?>
    <div class="d-flex-column">
      
    <div class="d-flex-column">
    <?php echo $matiere['icon_matiere']; ?>
    <h1><?php echo $matiere['nom_matiere']; ?></h1>
    </div>

    </div>
    <div class="d-flex-column">
    <p><?php echo $matiere['resume_matiere']; ?></p>
    <img class="imgil" src="img/matieres/<?php echo $matiere['image_matiere']; ?>" alt="Image associé à la matiére <?php echo $matiere['nom_matiere']; ?>">
    </div>

    <div class="bgsecondary d-flex-column">
    <p><?php echo $matiere['resume_equipe']; ?></p>
    <img class="imgil" src="img/matieres/<?php echo $matiere['image']; ?>" alt="Image associé à la matiére <?php echo $matiere['nom_matiere']; ?>">
    </div>

    <div class="d-flex-column">
      <p><?php echo $matiere['details_s1']; ?></p><br>
      <p><?php echo $matiere['details_s2']; ?></p>
    </div>

    <div class="equipe">
      <?php
      foreach ($equipe as $prof) : ?>

        <div class="prof">
              <h3><?php echo $prof['prenom']; ?> <?php echo $prof['nom']; ?></h3>
              <p class="colorcrea"><?php echo $prof['role'] ?></p>
              <a target="_blank" href="<?php echo $prof['linkedin']; ?>"><i class="fa-brands fa-linkedin"></i></a>
        </div>


      <?php endforeach; ?>
    </div>

    <h1 class="colorgrad">PROJET ÉTUDIANT</h1>

    <div class="projets">

      <?php
      foreach ($projets as $projet) : ?>
        <div class="card" style="background-image: url(uploaded_images/<?php echo $projet['file_name']; ?>)">
          <div class="content">
            <h2 class="titre"><?php echo $projet['titre']; ?></h2>
            <p class="auteur"><?php echo $projet['auteur']; ?></p>
            <p><?php echo $projet['date_creation'] ?></p>
            <a href="projet.php?id=<?php echo $projet['id_projet']; ?>" class="btn-projet">voir le projet</a>
          </div>
        </div>
      <?php endforeach; ?>
  </main>


  <?php require("footer.php"); ?>
</body>
<script src="js/script.js"></script>

</html>