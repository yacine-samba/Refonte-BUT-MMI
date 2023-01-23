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

<?php
        // Récupération de l'ID du projet à afficher
        $id_projet = $_GET['id'];
        // Récupération des informations du projet
        $query = "SELECT projets.*, images.file_name FROM projets LEFT JOIN images ON projets.id_projet = images.id_projet  GROUP BY projets.id_projet ORDER BY projets.date_creation";        
        $result = $db->prepare($query);
        $result->execute();
        $projet = $result->fetch();
        ?>

<main>
        <h1>Etes sur de vouloir supprimer le projet <?php echo $projet['titre']; ?> ?</h1>
        <div class="d-flex-row cardprojet">
                <img src="uploaded_images/<?php echo $projet['file_name']; ?>" alt="">
                <div class="d-flex-column">
                  <h4><?php echo $projet['titre']; ?></h4>
                  <p><?php echo $projet['auteur']; ?></p>
                  
                </div>
              </div>

        <form action="process_delete_projet.php" method="post">
                <input type="hidden" name="id_projet" value="<?php echo $projet['id_projet']; ?>">
                <input class="btn-cancel" type="submit" value="Annuler" name="cancel">
                <input class="btn-admin-delete" type="submit" value="Confirmer" name="delete_projet">
        </form>
        
</main>

</main>

</body>

<script src="js/script.js"></script>

</html>