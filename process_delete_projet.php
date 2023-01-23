



<?php
if (isset($_POST['delete_projet'])) {
    $id_projet = $_POST['id_projet'];

    // Suppression du projet dans la base de données
    $query = $db->prepare("DELETE FROM projets WHERE id_projet = :id_projet");
    $query->execute(array(':id_projet' => $id_projet));

    // Suppression des images liées au projet dans la base de données
    $query = $db->prepare("DELETE FROM images WHERE id_projet = :id_projet");
    $query->execute(array(':id_projet' => $id_projet));

    header("Location: admin.php?success=success_delete_project");
    exit;
}

if (isset($_POST['cancel'])) {
    header("Location: admin.php");
    exit;
}


?>