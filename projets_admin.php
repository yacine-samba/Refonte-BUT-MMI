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

  <?php require('header_admin.php') ?>


  <main>
  <h1>Tous les projets des étudiants MMI</h1>
        <?php
          // Récupération des 3 derniers projets
          $query = "SELECT projets.*, images.file_name FROM projets LEFT JOIN images ON projets.id_projet = images.id_projet GROUP BY projets.id_projet ORDER BY projets.date_creation";
          $result = $db->prepare($query);
          $result->execute();
          $projets = $result->fetchAll(); ?>
          <div class="projets-admin d-flex-column">

            <?php
            foreach ($projets as $projet) : ?>
              <div class="d-flex-column">
                <div class="d-flex-row cardprojet">
                  <img src="uploaded_images/<?php echo $projet['file_name']; ?>" alt="">
                  <div class="d-flex-column">
                    <h4><?php echo $projet['titre']; ?></h4>
                    <p><?php echo $projet['auteur']; ?></p>
                  </div>
                </div>

                <div class="d-flex-row modif-projet">
                  <div class="btn-admin-delete"><i class="fa-light fa-trash-can-xmark"></i><a href="delete_confirmation.php?id=<?php echo $projet['id_projet']; ?>">Supprimer</a></div>
                  <div class="btn-admin-edit"><i class="fa-light fa-pen-to-square"></i>
                    <a href="edit_projet.php?id=<?php echo $projet['id_projet']; ?>">Modifier</a>
                  </div>
                </div>
                
              </div>

            <?php endforeach; ?>
            <div class="btn-admin-add"><i class="fa-regular fa-plus"></i><a href="new_projet.php">Ajouter un projet</a></div>
    </main>
  <a href="admin.php">Retourner au tableau de bord</a>

  </body>

<script src="js/script.js"></script>

</html>