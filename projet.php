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

    <!-- Fin du Header -->

    <main class="page-projet">
        <?php
        // Récupération de l'ID du projet à afficher
        $id_projet = $_GET['id'];
        // Récupération des informations du projet
        $query = "SELECT * FROM projets WHERE id_projet = $id_projet";
        $result = $db->prepare($query);
        $result->execute();
        $projet = $result->fetch();
        // Récupération des images associées au projet
        $query = "SELECT * FROM images WHERE id_projet = $id_projet";
        $result = $db->prepare($query);
        $result->execute();
        $images = $result->fetchAll();

        foreach ($images as $image) {
            // Vérifie si l'image existe sur le serveur
            $file_path = "uploaded_images/" . $image['file_name'];
            if (file_exists($file_path)) {
                if (substr(sprintf('%o', fileperms($file_path)), -4) != "0777") {
                    chmod($file_path, 0777);
                }
            }
        }
        ?>

        <h1><?php echo $projet['titre']; ?></h1>
        <p>Auteur : <?php echo $projet['auteur']; ?>  <?php echo $projet['date_creation']; ?></p>

        
        <?php foreach ($images as $image) : ?>
            <img class="imgprojet" src="uploaded_images/<?php echo $image['file_name']; ?>" alt="<?php echo $image['file_name']; ?>">
        <?php endforeach; ?>

       <div>
       <h3>Description : </h3>
        <p><?php echo $projet['description']; ?></p>
       </div>
       
       <div>
       <h3>Objectifs : </h3>
       <p><?php echo $projet['objectifs']; ?></p>
       </div>
       <div>
        <h3>Outils : </h3>
       <p><?php echo $projet['outils']; ?></p>
       </div>
       <div>
        <h3>Compétences : </h3>
       <p><?php echo $projet['competences']; ?></p>
       </div>
       <div class="d-flex-column">
       <a class="btn" href="<?php echo $projet['lien']; ?>">Voir le projet</a>
       </div>

       <div class="d-flex-column projet">
      <h3>D'autres projets des étudiants</h3>

      <?php
      // Récupération des 3 derniers projets
      $query = "SELECT projets.*, images.file_name FROM projets LEFT JOIN images ON projets.id_projet = images.id_projet GROUP BY projets.id_projet ORDER BY projets.date_creation DESC LIMIT 4";
      $result = $db->prepare($query);
      $result->execute();
      $projets = $result->fetchAll(); ?>
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
      </div>
      <a href="projets.php" class="btn">Voir tous les projets</a>
    </div>

    </main>


    <?php require("footer.php"); ?>
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->

    <script src="js/script.js"></script>
</body>

</html>