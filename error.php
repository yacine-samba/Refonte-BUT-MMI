<?php
switch($_GET['code'])
{
case '404':header('Location: https://but-mmichamps.fr/erreur_404.php');
break;
default:header('Location: https://but-mmichamps.fr/');
}

?>