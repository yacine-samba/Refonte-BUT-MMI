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

    <main>

    <h1>Voici tous les projets de nos étudiants en <span class="colorgrad">MMI</span></h1>

        <?php
        // Récupération des projets
        $query = "SELECT projets.*, images.file_name FROM projets LEFT JOIN images ON projets.id_projet = images.id_projet GROUP BY projets.id_projet ORDER BY projets.date_creation DESC";
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
    </main>

    <?php require("footer.php");  ?>
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->

    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</body>

</html>