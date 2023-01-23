<?php
session_start();

include ("connect.php");



// Traitement du formulaire de connexion
if (isset($_POST['submitlogin'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Récupération de l'utilisateur
    $query = "SELECT * FROM admin WHERE login = '$login' LIMIT 1";
    $result = $db->prepare($query);
    $result ->execute();
    $user = $result->fetch();

    $hash = '$2y$10$a/18CJKb5josPHFmj5/PAePyzW9hJFVw3pWNVAAalcd';

    if ($user) { // si l'utilisateur existe
        if (password_verify($password, $user['password'])) { // vérification du mot de passe
            // Connexion réussie
        $_SESSION['login'] = $login;
        header("Location: admin.php");
        exit;
    } else {
        header("Location: login.php?error=incorrect_password");
        exit;
    }
} else {
    header("Location: login.php?error=user_not_found");
    exit;
}
}

?>