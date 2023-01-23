<?php
// Création de la connexion
try {
    $db = new PDO('mysql:host=localhost;dbname=butmmi;charset=utf8', 'root', '');
    // $db = new PDO('mysql:host=db5011614003.hosting-data.io;dbname=dbs9790998;charset=utf8', 'dbu588657', 'AKTy07tr8sw3v3dOGWk4t');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('La connexion a échoué:  : '.$e->getMessage());
}


?>
