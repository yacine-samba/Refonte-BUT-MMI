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
        if (!isset($_SESSION['login']) || $_SESSION['login'] != "admin") {
            header("Location: admin.php?error=unauthorized");
            exit;
        }
        ?>

        <main>
            <h1>Ajouter un nouvel utilisateur administrateur</h1>
            <form action="process_new_admin.php" method="post">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required><br>
                <label for="prenom">Prenom:</label>
                <input type="text" id="prenom" name="prenom" required><br>
                <label for="login">Identifiant:</label>
                <input type="text" id="login" name="login" required>
                <br>
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
                <br><br>
                <input type="submit" value="Ajouter" name="signup">
                <?php
                if (isset($_GET['error'])) {
                    switch ($_GET['error']) {
                        case 'user_already_exist':
                            echo "<p style='color:red'>Identifiant déja utilisé</p>";
                            break;
                        case 'success_add_admin':
                            echo "<p style='color:green'>Utilisateur ajouté avec succès</p>
                            <a href='admin.php'>Retourner sur l'interface administrateur</a>";
                    }
                }
                ?>
            </form>
        <a href="admin.php">Retourner au tableau de bord</a>
        </main>

</body>

</html>