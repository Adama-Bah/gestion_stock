<?php
include("../../config.php");
$ids = $_POST['id_fournisseur'];
$nom = $_POST['nom'];
$pre = $_POST['prenom'];
$adresse = trim(htmlentities($_POST['adresse']));
$telephone = trim(htmlentities($_POST['telephone']));
$email = trim(htmlentities($_POST['email']));
$date = date('y/m/d h:m:s');
$req1 = "SELECT * FROM fournisseur WHERE id_fournisseur='" . $ids . "' ";
$ex1 = $bdd->query($req1);
$row = $ex1->rowcount();
if ($row != 0) {
    ($line = $ex1->FETCH(PDO::FETCH_ASSOC));
    $nom1 = $line['nom'];
    $prenoms = $line['prenom'];
    if ($nom1 == $nom) {
        if ($pre == $prenoms) {
            $maj1 = "UPDATE fournisseur SET adresse='" . $adresse. "', prenom='" . $prenoms . "',telephone='" . $telephone . "',email='" . $email . "' WHERE id_fournisseur='" . $ids . "'";
            $exe2 = $bdd->query($maj1);
            echo "<script type='text/javascript'>
                        alert('Mise à jour a été effectué');
                        window.location.href='../../?pages=fournisseur&c=lister';
                        </script>";
            die();
        } elseif ($pre != $prenoms) {
            $ver = "SELECT * FROM fournisseur where prenom='" . $pre . "'";
            $exe3 = $bdd->query($ver);
            $row2 = $exe3->rowcount();
            if ($row2 == 0) {
                $maj2 = "UPDATE fournisseur SET adresse='" . $adresse . "', telephone='" . $telephone . "',email='" . $email . "',prenom='" . $pre . "' WHERE id_fournisseur='" . $ids . "'";
                $exe4 = $bdd->query($maj2);
                echo "<script type='text/javascript'>
                        alert('mis a jour effectué avec succees');
                        window.location.href='../../?page=fournisseur&c=lister';
                        </script>";
                die();
            } elseif ($row2 != 0) {
                echo "<script type='text/javascript'>
                        alert('Caption existant');
                        window.location.href='../../?page=fournisseur&c=lister';
                        </script>";
                die();
            }
        }
    } elseif ($nom1 != $nom) {
        if ($pre == $prenoms) {
            $ver1 = "SELECT * FROM fournisseur where nom='" . $nom1 . "' and id_fournisseur <>'" . $ids . "'";
            $exe5 = $bdd->query($ver1);
            $row3 = $exe5->rowcount();
            if ($row3 != 0) {
                echo "<script type='text/javascript'>
                        alert('nom fournisseur existant');
                        window.location.href='../../?page=fournisseur&c=lister';
                        </script>";
                die();
            } elseif ($row3 == 0) {
                
                
                $up = "UPDATE fournisseur SET nom='" . $nom . "', adresse='" . $adresse . "', prenom='" . $pre . "', telephone='" . $telephone . "',email='" . $email . "'  WHERE id_fournisseur='" . $ids . "'";
                $exe10 = $bdd->query($up);
                echo "<script type='text/javascript'>
                        alert('mise a jour effectue');
                        window.location.href='../../?page=fournisseur&c=lister';
                        </script>";
                die();
            }
        } elseif ($pre != $prenoms) {
            $ver2 = "SELECT * FROM fournisseur where prenom='" . $prenoms . "' and id_fournisseur <>'" . $ids . "'";
            $exe6 = $bdd->query($ver2);
            $row4 = $exe6->rowcount();
            if ($row4 != 0) {
                echo "<script type='text/javascript'>
                        alert('nom fournisseur existant');
                        window.location.href='../../?page=fournisseur&c=lister';
                        </script>";
                die();
            } elseif ($row4 == 0) {

                $up = "UPDATE fournisseur SET nom='" . $nom . "', adresse='" . $adresse . "', prenom='" . $pre . "' ,adresse='" . $adresse . "' , telephone='" . $telephone . "' , email='" . $email . "' WHERE id_fournisseur='" . $ids . "'";
                $exe10 = $bdd->query($up);
                echo "<script type='text/javascript'>
                        alert('mise a jour effectue');
                        window.location.href='../../?page=fournisseur&c=lister';
                        </script>";
                die();
            }
        }
    }
} elseif ($row == 0) {
    echo "<script type='text/javascript'>
        alert('l'enregistrement n'existe plus');
        window.location.href='../../?page=fournisseur&c=lister';
        </script>";
    die();
}
