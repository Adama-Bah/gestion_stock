<?php
$produit = isset($_GET['produit']) ? $_GET['produit'] : "Ajouter";
switch ($produit) {
    case 'Ajouter':
        include('produits/produit/add.php');
        break;
    case 'modifier':
        include('./produits/produit/edit.php');
        break;
    case 'list':
        include('./produits/produit/lister.php');
        break;
    case 'voir':
        include('./produits/produit/view.php');
        break;
    default:
        include("404.php");
        break;
}
?>