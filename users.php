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
        <h1>
            Utilisateurs
        </h1>
        <?php
                if (isset($_GET['error'])) {
                    switch ($_GET['error']) {
                        case 'success_delete_admin':
                            echo "<p style='color:red; text-align:center'>Utilisateur supprimé</p>";
                            break;
                        case 'success_add_admin':
                            echo "<p style='color:green'>Utilisateur ajouté avec succès</p>
                            <a href='admin.php'>Retourner sur l'interface administrateur</a>";
                    }
                }
                ?>
    <?php

$query = "SELECT * FROM admin";
$result = $db->prepare($query);
$result->execute();
$users = $result->fetchAll(); ?>

<div class="d-flex-column users">
    <?php
    foreach ($users as $user) { ?>

        <div class="bglight user">
        <h4><?php echo $user['prenom']; ?> <?php echo $user['nom']; ?></h4>
        <p>login : <?php echo $user['login']; ?> 
        <form action="process_delete_user.php" method="post">
                <input type="hidden" name="id_admin" value="<?php echo $user['id_admin']; ?>">
                <div class="btn-admin-delete-user"><i class="fa-regular fa-trash-can-xmark"></i>
                <input type="submit" value="Supprimer l'utilisateur" name="delete_user"></div>
        </form>
    </p>
        
        </div>

    <?php
    }
    ?>
    <div class="btn-admin" ><i class="fa-light fa-user-plus"></i>
    <a href="new_admin.php">Ajouter un nouvel utilisateur</a></div>
    
</div>
    </main>
    <a href="admin.php">Retourner au tableau de bord</a>

</body>

<script src="js/script.js"></script>

</html>