<?php
include("connect.php");
session_start();
if (isset($_SESSION["login"])) {    
}else{
    header("Location: admin.php?error=unauthorized");
    exit;}

// Récupération de l'ID du projet à modifier
$id_projet = $_GET['id'];

// Récupération de l'ID du projet à afficher
$id_projet = $_GET['id'];
// Récupération des informations du projet
$query = "SELECT * FROM projets";        
$result = $db->prepare($query);
$result->execute();
$projet = $result->fetch();

// Traitement du formulaire de modification de projet
if (isset($_POST['updateprojet'])) {
    $id_matiere = $_POST['id_matiere'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];
    $description = $_POST['description'];
    $objectifs = $_POST['objectifs'];
    $outils = $_POST['outils'];
    $competences = $_POST['competences'];
    $lien = $_POST['lien'];

    // Mise à jour des informations du projet dans la base de données
    $query = $db->prepare("UPDATE projets SET id_matiere = :id_matiere, titre = :titre, auteur = :auteur, date_creation = :date_creation, description = :description, objectifs = :objectifs, outils = :outils, competences = :competences, lien = :lien WHERE id_projet = :id_projet");
    $query->execute(array(':id_matiere' => $id_matiere, ':titre' => $titre, ':auteur' => $auteur, ':date_creation' => $date_creation, ':description' => $description, ':objectifs' => $objectifs, ':outils' => $outils, ':competences' => $competences, ':lien' => $lien, ':id_projet' => $id_projet));

    // Vérification de la modification des images
    if (isset($_FILES['images']['tmp_name'])) {
        // Suppression des images existantes pour le projet
        $query = $db->prepare("DELETE FROM images WHERE id_projet = :id_projet");
        $query->execute(array(':id_projet' => $id_projet));

        // Boucle pour l'upload des nouvelles images
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            // Vérification de l'upload de l'image
            if ($_FILES['images']['error'][$key] == 0) {
                $file_name = $_FILES['images']['name'][$key];
                $file_tmp = $_FILES['images']['tmp_name'][$key];

                // Déplacement de l'image dans un répertoire de stockage temporaire
                move_uploaded_file($file_tmp, "uploaded_images/" . $file_name);

                // Insertion de l'image dans la base de données
                $query = $db->prepare("INSERT INTO images (id_projet, file_name) VALUES (:id_projet, :file_name)");
                $query->execute(array(':id_projet' => $id_projet, ':file_name' => $file_name));
            }
        }
        header("Location: admin.php?success=success_update_project");
        exit;
    }
}

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

<form method="post" enctype="multipart/form-data">

<label for="matiere">Matiére :</label>
                <select name="id_matiere" id="matiere">

                <?php
        // Récupération de la liste des catégories
        $query = $db->prepare("SELECT * FROM matieres");
        $query->execute();
        $matieres = $query->fetchAll();
        
        // Affichage de la liste des catégories dans la liste déroulante
        foreach ($matieres as $matiere) {
            echo "<option value='" . $matiere['id_matiere'] . "'>" . $matiere['nom_matiere'] . "</option>";
        }
        ?>

                
                </select><br><br>
    <label for="titre">Titre</label>
    <input type="text" name="titre" value="<?php echo $projet['titre']; ?>">
    <br>
    <label for="auteur">Auteur</label>
    <input type="text" name="auteur" value="<?php echo $projet['auteur']; ?>">
    <br>
    <label for="date_creation">Date de création</label>
    <input type="date" name="date_creation" value="<?php echo $projet['date_creation']; ?>">
    <br>
    <label for="description">Description</label>
    <textarea name="description"><?php echo $projet['description']; ?></textarea>
    <br>
    <label for="objectifs">Objectifs</label>
    <textarea name="objectifs"><?php echo $projet['objectifs']; ?></textarea>
    <br>
    <label for="outils">Outils utilisés</label>
    <input type="text" name="outils" value="<?php echo $projet['outils']; ?>">
    <br>
    <label for="competences">Compétences développées :</label>
<input type="text" name="competences" value="<?php echo $projet['competences']; ?>">
<br>
<label for="lien">Lien vers le projet :</label>
<input type="text" name="lien" value="<?php echo $projet['lien']; ?>">
<br>
<label for="images">Images du projet :</label>
<input type="file" name="images[]" multiple>
<br>
<input type="submit" name="updateprojet" value="Modifier le projet">

</form>

<script src="js/script.js"></script>
</body>

</html>