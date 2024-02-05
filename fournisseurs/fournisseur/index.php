<?php
$fournisseur = isset($_GET['fournisseur']) ? $_GET['fournisseur'] : "Ajouter";
switch ($fournisseur) {
    case 'Ajouter':
        include('fournisseurs/fournisseur/add.php');
        break;
    case 'modifier':
        include('./fournisseurs/fournisseur/edit.php');
        break;
    case 'list':
        include('./fournisseurs/fournisseur/lister.php');
        break;
    case 'voir':
        include('./fournisseurs/fournisseur/view.php');
        break;
    default:
        include("404.php");
        break;
}
?>