<?php
    session_start();
    include("connect.php");
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    



<?php
// Sélection de toutes les entrées de la table modules
$query = "SELECT * FROM modules";
$modules = mysqli_query($db, $query);

// Boucle à travers les résultats de la requête
while ($module = mysqli_fetch_assoc($modules)) {
    // Affichage des détails du module
    echo '<h2>' . $module['nom'] . '</h2>';

    // Sélection de toutes les matières associées à ce module
    $query2 = "SELECT * FROM matieres WHERE id_module = " . $module['id_module'];
    $matieres = mysqli_query($db, $query2);

    // Boucle à travers les résultats de la requête
    while ($matiere = mysqli_fetch_assoc($matieres)) {
        // Affichage des détails de la matière
        echo '<a href="enseignement.php?id=' . $matiere['id_matiere'] . '">' . $matiere['nom_matiere'] . '</a><br>';
    }
}

mysqli_close($db);
?>

</body>

</html>