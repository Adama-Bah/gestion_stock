<?php
$supervisionn = isset($_GET['supervisionn']) ? $_GET['supervisionn'] : "Ajouter";
switch ($supervisionn) {
    case 'Ajouter':
        include('supervisionns/supervisionn/add.php');
        break;
    case 'modifier':
        include('./supervisionns/supervisionn/edit.php');
        break;
    case 'list':
        include('./supervisionns/supervisionn/lister.php');
        break;
    case 'voir':
        include('./supervisionns/supervisionn/view.php');
        break;
    default:
        include("404.php");
        break;
}
?>