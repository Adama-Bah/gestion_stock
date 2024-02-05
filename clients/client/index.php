<?php
$client = isset($_GET['client']) ? $_GET['client'] : "Ajouter";
switch ($client) {
    case 'Ajouter':
        include('clients/client/add.php');
        break;
    case 'modifier':
        include('./clients/client/edit.php');
        break;
    case 'list':
        include('./clients/client/lister.php');
        break;
    case 'voir':
        include('./clients/client/view.php');
        break;
    default:
        include("404.php");
        break;
}
?>