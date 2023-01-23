<?php
include("connect.php");
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "admin") {
    header("Location: admin.php?error=unauthorized");
    exit;
};


// Traitement du formulaire d'ajout de projet
if (isset($_POST['newprojet'])) {
    $id_matiere = $_POST['id_matiere'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];
    $description = $_POST['description'];
    $objectifs = $_POST['objectifs'];
    $outils = $_POST['outils'];
    $competences = $_POST['competences'];
    $lien = $_POST['lien'];




    // Insertion du projet dans la base de données
    $query = $db->prepare("INSERT INTO projets (id_matiere ,titre, auteur, date_creation, description, objectifs, outils, competences, lien) VALUES(:id_matiere, :titre, :auteur, :date_creation, :description, :objectifs, :outils, :competences, :lien)");
$query->execute(array(':id_matiere' => $id_matiere, ':titre' => $titre, ':auteur' => $auteur, ':date_creation' => $date_creation, ':description' => $description, ':objectifs' => $objectifs, ':outils' => $outils, ':competences' => $competences, ':lien' => $lien));

    $id_projet = $db->lastInsertId();

    // Boucle pour l'upload des images
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
    // header("Location: new_projet.php?success=success_add_project");
    // exit;
    header("Location: projet.php?id=" . $id_projet);
    exit;
}
