<?php include("../../config.php");
$nom_produit = $_POST['nom_produit'];
$categorie = $_POST['categorie'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$date_E = date('y/m/d h:m:s');
$date_F = date('y/m/d h:m:s');

$req = "SELECT * FROM produit WHERE nom_produit='" . $nom_produit . "'";
$exe = $bdd->query($req);
$nbre = $exe->rowcount();
if ($nbre != 0) {
    echo "<script type='text/javascript'>
alert(' ');
window.location.href='../../?page=produits';
</script>";
    exit(1);
} elseif ($nbre == 0) {
    $etat = 0;
    $deletable = 0;
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
window.location.href='../../?page=produits';
</script>";
            } else {
                echo "<script type='text/javascript'>
alert('echec du telechaargement de l'image');
window.location.href='../../?page=produits';
</script>";
            }
        } else {
            echo "<script type='text/javascript'>
alert('echo $erreur');
window.location.href='../../?page=produits';
</script>";
        }
    } else if ((!strstr($nom_file, ".")) != "") {
    }
    $sql = $bdd->prepare('INSERT INTO produit(id_produit,nom_produit,categorie,description,prix,image,date_E,date_F,etat,deletable)
VALUES(:id_produit,:nom_produit,:categorie,:description,:prix,:image,:date_E,:date_F,:etat,:deletable)');
    $sql->bindValue('id_produit', '', PDO::PARAM_INT);
    $sql->bindValue('nom_produit', $nom_produit, PDO::PARAM_STR);
    $sql->bindValue('categorie', $categorie, PDO::PARAM_STR);
    $sql->bindValue('description', $description);
    $sql->bindValue('prix', $prix, PDO::PARAM_STR);
    $sql->bindValue('image', $nom_file, PDO::PARAM_STR);
    $sql->bindValue('date_E', $date_E);
    $sql->bindValue('date_F', $date_F);
    $sql->bindValue('etat', $etat, PDO::PARAM_INT);
    $sql->bindValue('deletable', $deletable, PDO::PARAM_INT);
    $sql->execute() or die(print_r($sql->ERRORInfo()));
    echo "<script type='text/javascript'>
alert('produit ajouter avec success');
window.location.href='../../?page=produits';
</script>";
    die();
    }








