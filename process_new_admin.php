<?php
session_start();
include ("connect.php");


// Traitement du formulaire d'inscription
if (isset($_POST['signup'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT); // Hashage du mot de passe

    // Vérification de l'existence de l'utilisateur
    $user_check_query = "SELECT * FROM admin WHERE login='$login' LIMIT 1";
    $result = $db->prepare($user_check_query);
    $result->execute();
    $user = $result->fetch();

    if ($user) { // si l'utilisateur existe déjà
        if ($user['login'] === $login) {
            header("Location: new_admin.php?error=user_already_exist");
            exit;
        }
    } else { // sinon, on ajoute l'utilisateur à la base de données
        $query = $db->prepare("INSERT INTO admin (nom, prenom, login, password) VALUES('$nom', '$prenom', '$login', '$password_hash')");
        $query->execute();
        header("Location: users.php?error=success_add_admin");
            exit;
    }
}



?>