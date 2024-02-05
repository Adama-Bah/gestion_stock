<?php
    $page = isset($_GET['page'])?$_GET['page']:"dashboard";
    switch($page){
    case "dashboard": include('page/main.php');
    break;
    case "clients": 
    include('./clients/client/index.php');
    break;
    case "fournisseurs": 
    include('./fournisseurs/fournisseur/index.php');
    break;
    case "produits": 
    include('./produits/produit/index.php');
    break;
    case "utilisateurs": 
    include('./utilisateurs/utilisateur/index.php');
    break;
    case "achats": 
        include('./achats/achat/index.php');
        break;
    case "ventes": 
        include('./ventes/vente/index.php');
        break;
	default:
	include("404.php");
	break;
	}
?>