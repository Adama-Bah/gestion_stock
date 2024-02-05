<?php include("../../config.php");
$fournisseur = $_POST['fournisseur'];
$produit = $_POST['produit'];
$quantite = $_POST['quantite'];
$prix = $_POST['prix'];
$date_achat = $_POST['date_achat'];

if (empty($_POST['produit'])) {
    echo "<script type='text/javascript'>
        alert('un des champs est vide');
        window.location.href='../../?page=achat';
        </script>";
    exit(1);
} elseif ( !empty($_POST['produit'])) {
        $etat = 0;
        $deletable = 0;
        $sql = $bdd->prepare('INSERT INTO achat(id_achat,fournisseur,produit,quantite,prix,date_achat,etat,deletable)
VALUES(:id_achat,:fournisseur,:produit,:quantite,:etat,:deletable)');
        $sql->bindValue('id_achat', '', PDO::PARAM_INT);
        $sql->bindValue('fournisseur', $fournisseur, PDO::PARAM_STR);
        $sql->bindValue('produit', $produit, PDO::PARAM_INT);
        $sql->bindValue('quantite', $quantite, PDO::PARAM_INT);
        $sql->bindValue('prix', $prix, PDO::PARAM_INT);
        $sql->bindValue('date_achat', $date_achat);
        $sql->bindValue('etat', $etat, PDO::PARAM_INT);
        $sql->bindValue('deletable', $deletable, PDO::PARAM_INT);
        $sql->execute() or die(print_r($sql->ERRORInfo()));
        echo "<script type='text/javascript'>
            alert('achat ajouter avec success');
            window.location.href='../../?page=achat';
            </script>";
        die();
    }

