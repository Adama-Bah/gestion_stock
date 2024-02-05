<?php
include("../../config.php");
$ids = $_POST['id_client'];
$nom = $_POST['nom'];
$pre = $_POST['prenom'];
$adresse = trim(htmlentities($_POST['adresse']));
$telephone = trim(htmlentities($_POST['telephone']));
$email = trim(htmlentities($_POST['email']));
$date = date('y/m/d h:m:s');
$req1 = "SELECT * FROM client WHERE id_client='" . $ids . "' ";
$ex1 = $bdd->query($req1);
$row = $ex1->rowcount();
if ($row != 0) {
    ($line = $ex1->FETCH(PDO::FETCH_ASSOC));
    $nom1 = $line['nom'];
    $prenoms = $line['prenom'];
    if ($nom1 == $nom) {
        if ($pre == $prenoms) {
            $maj1 = "UPDATE client SET adresse='" . $adresse. "', prenom='" . $prenoms . "',telephone='" . $telephone . "',email='" . $email . "' WHERE id_client='" . $ids . "'";
            $exe2 = $bdd->query($maj1);
            echo "<script type='text/javascript'>
                        alert('Mise à jour a été effectué');
                        window.location.href='../../?pages=client&c=lister';
                        </script>";
            die();
        } elseif ($pre != $prenoms) {
            $ver = "SELECT * FROM client where prenom='" . $pre . "'";
            $exe3 = $bdd->query($ver);
            $row2 = $exe3->rowcount();
            if ($row2 == 0) {
                $maj2 = "UPDATE client SET adresse='" . $adresse . "', telephone='" . $telephone . "',email='" . $email . "',prenom='" . $pre . "' WHERE id_client='" . $ids . "'";
                $exe4 = $bdd->query($maj2);
                echo "<script type='text/javascript'>
                        alert('mis a jour effectué avec succees');
                        window.location.href='../../?page=client&c=lister';
                        </script>";
                die();
            } elseif ($row2 != 0) {
                echo "<script type='text/javascript'>
                        alert('Caption existant');
                        window.location.href='../../?page=client&c=lister';
                        </script>";
                die();
            }
        }
    } elseif ($nom1 != $nom) {
        if ($pre == $prenoms) {
            $ver1 = "SELECT * FROM client where nom='" . $nom1 . "' and id_client <>'" . $ids . "'";
            $exe5 = $bdd->query($ver1);
            $row3 = $exe5->rowcount();
            if ($row3 != 0) {
                echo "<script type='text/javascript'>
                        alert('nom client existant');
                        window.location.href='../../?page=client&c=lister';
                        </script>";
                die();
            } elseif ($row3 == 0) {
                
                
                $up = "UPDATE client SET nom='" . $nom . "', adresse='" . $adresse . "', prenom='" . $pre . "', telephone='" . $telephone . "',email='" . $email . "'  WHERE id_client='" . $ids . "'";
                $exe10 = $bdd->query($up);
                echo "<script type='text/javascript'>
                        alert('mise a jour effectue');
                        window.location.href='../../?page=client&c=lister';
                        </script>";
                die();
            }
        } elseif ($pre != $prenoms) {
            $ver2 = "SELECT * FROM client where prenom='" . $prenoms . "' and id_client <>'" . $ids . "'";
            $exe6 = $bdd->query($ver2);
            $row4 = $exe6->rowcount();
            if ($row4 != 0) {
                echo "<script type='text/javascript'>
                        alert('nom client existant');
                        window.location.href='../../?page=client&c=lister';
                        </script>";
                die();
            } elseif ($row4 == 0) {

                $up = "UPDATE client SET nom='" . $nom . "', adresse='" . $adresse . "', prenom='" . $pre . "' ,adresse='" . $adresse . "' , telephone='" . $telephone . "' , email='" . $email . "' WHERE id_client='" . $ids . "'";
                $exe10 = $bdd->query($up);
                echo "<script type='text/javascript'>
                        alert('mise a jour effectue');
                        window.location.href='../../?page=client&c=lister';
                        </script>";
                die();
            }
        }
    }
} elseif ($row == 0) {
    echo "<script type='text/javascript'>
        alert('l'enregistrement n'existe plus');
        window.location.href='../../?page=client&c=lister';
        </script>";
    die();
}
