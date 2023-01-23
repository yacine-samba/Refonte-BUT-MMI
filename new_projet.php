<?php
session_start();
include("connect.php");
if (!isset($_SESSION['login']) || $_SESSION['login'] != "admin") {
    header("Location: admin.php?error=unauthorized");
    exit;
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisionSneakers - Inscription</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <main class="new_projet">
        
        <br>
        <a href="admin.php">Retourner sur la page admin</a>

        <main>
            <h1>Ajouter un nouveau projet</h1>
            <form action="process_new_projet.php" method="post" enctype="multipart/form-data">
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

                <label for="titre">Nom du projet:</label>
                <input type="text" id="titre" name="titre" required><br><br>

                <label for="auteur">Auteur du projet</label>
                <input type="text" id="auteur" name="auteur" required><br><br>

                <label for="date_creation">Date de création</label>
                <input type="date" id="date_creation" name="date_creation" required><br><br>

                <label for="description">Déscription du projet</label>
                <textarea type="text" id="description" name="description" required></textarea>
                <br><br>

                <label for="objectifs">Objectifs :</label>
                <textarea type="text" id="objectifs" name="objectifs" required></textarea><br><br>

                <label for="outils">Outils</label>
                <input type="text" id="outils" name="outils" required><br><br>

                <label for="competences">Compétences</label>
                <input type="text" id="competences" name="competences" required><br><br>

                <label for="liens">Liens</label>
                <input type="text" id="lien" name="lien" required><br><br>

                <label for="images">Ajouter des images</label>
                <input type="file" id="images" name="images[]" multiple required><br><br>

                <br><br>
                <input type="submit" value="Ajouter" name="newprojet">

                <?php
                if (isset($_GET['success'])) {
                    switch ($_GET['success']) {
                        case 'success_add_project':
                            echo "<p style='color:green'>Projet bien ajouté</p>";
                            break;
                    }
                }
                ?>
            </form>
        </main>

    </main>

</body>

</html>