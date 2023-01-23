<?php
session_start();
include("connect.php");

if (isset($_POST['delete_user']) || $_SESSION['login'] != "admin")   {
    $id_admin = $_POST['id_admin'];

    // Suppression du admin dans la base de données
    $query = $db->prepare("DELETE FROM admin WHERE id_admin = :id_admin");
    $query->execute(array(':id_admin' => $id_admin));
    header("Location: users.php?error=success_delete_admin");
            exit;
}

if (isset($_POST['cancel'])) {
    header("Location: admin.php");
    exit;
}
?>