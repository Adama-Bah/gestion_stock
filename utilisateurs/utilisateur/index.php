<?php
$utilisateur = isset($_GET['utilisateur']) ? $_GET['utilisateur'] : "Ajouter";
switch ($utilisateur) {
    case 'Ajouter':
        include('utilisateurs/utilisateur/add.php');
        break;
    case 'modifier':
        include('./utilisateurs/utilisateur/edit.php');
        break;
    case 'list':
        include('./utilisateurs/utilisateur/lister.php');
        break;
    case 'voir':
        include('./utilisateurs/utilisateur/view.php');
        break;
    default:
        include("404.php");
        break;
}
?>