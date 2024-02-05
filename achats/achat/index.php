<?php
$achat = isset($_GET['achat']) ? $_GET['achat'] : "Ajouter";
switch ($achat) {
    case 'Ajouter':
        include('achats/achat/add.php');
        break;
    case 'modifier':
        include('./achats/achat/edit.php');
        break;
    case 'list':
        include('./achats/achat/lister.php');
        break;
    case 'voir':
        include('./achats/achat/view.php');
        break;
    default:
        include("404.php");
        break;
}
?>