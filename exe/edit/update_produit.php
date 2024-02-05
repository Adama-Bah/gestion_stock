<?php
include("../../config.php");
$ids = $_POST['id_produit'];
$nomP = $_POST['nom_produit'];
$categ = $_POST['categorie'];
$descrip = $_POST['description'];
$pri = $_POST['prix'];
$date_Expi = $_POST['date_E'];
$date_Fab = $_POST['date_F'];


$req = "SELECT * FROM produit WHERE id_produit='" . $ids . "' ";
$exe = $bdd->query($req);
$row = $exe->rowcount();


if ($row != 0) {
    ($line = $exe->FETCH(PDO::FETCH_ASSOC));
    $nom_produit = $line['nom_produit'];
    $image = $line['image'];
    if ($nom_produit == $nomP) {
        echo "<script type='text/javascript'>
        alert('nom_produit identique');
        window.location.href='../../?page=produit&c=modifier&id_produit=$ids';
        </script>";
    } elseif ($nom_produit != $nomP) {
        $req1 = "SELECT nom_produit FROM produit WHERE nom_produit='" . $nomP . "' ";
        $exe1 = $bdd->query($req1);
        $row = $exe1->rowcount();
        if ($row != 0) {
            echo "<script type='text/javascript'>
        alert('nom_produit deja existant');
        window.location.href='../../?page=produit&c=&id_produit=$ids';
        </script>";
            die();
        } elseif ($row == 0) {

            $cible = "../../assets/img/image/";
            $extensions = array(".png", ".jpg", ".jpeg", ".pdf", ".svg", ".gif", ".PNG", ".JPG", ".JPEG", ".PDF", ".SVG", ".GIF");
            $extension = strrchr($_FILES['image']['name'], '.');
            $nom_file = $_FILES['image']['name'];
            $taille = $_FILES['image']['size'];
            $tmp = $_FILES['image']['tmp_name'];
            if ((strstr($nom_file, ".")) != "") {
                if (!in_array($extension, $extensions)) {
                    $erreur = "L'extension non autorisé !";
                    die();
                }
                if (!isset($erreur)) {
                    // formatages du nom de fichier.
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $cible . $nom_file)) {
                        echo "<script type='text/javascript'>
                    alert('telechargement de l'image reussit');
                    window.location.href='../../?page=produit';
                    </script>";
                    } else {
                        echo "<script type='text/javascript'>
            alert('echec du telechaargement de l'image');
            window.location.href='../../?page=produit';
            </script>";
                    }
                } else {
                    echo "<script type='text/javascript'>
            alert('echo $erreur');
            window.location.href='../../?page=produit';
            </script>";
                }
            }
            $maj = "UPDATE produit SET categorie='" . $categ . "', description='" . $descrip . "',prix='" . $pri . "', image='" . $nom_file . "' WHERE id_produit='" . $ids . "'";
            $exe2 = $bdd->query($maj);
            echo "<script type='text/javascript'>
                        alert('Mise à jour a été effectué');
                        window.location.href='../../?page=produit&c=lister';
                        </script>";
            die();
        }
        
        if (file_exists($image)) {
            unlink("../../assets/img/image/$image");
        }
    }
} elseif ($row == 0) {
    echo "<script type='text/javascript'>
        alert('l'enregistrement n'existe plus');
        window.location.href='../../?page=produit&c=&id_produit=$ids';
        </script>";
    die();
}
