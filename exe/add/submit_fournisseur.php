<?php include("../../config.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = trim(htmlentities($_POST['adresse']));
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$date = date('y/m/d h:m:s');
if (empty($_POST['nom']) or empty($_POST['prenom'])) {
    echo "<script type='text/javascript'>
alert('un des champs est vide');
window.location.href='../../?pages=fournisseurs';
</script>";
    exit(1);
} elseif (!empty($_POST['nom']) && !empty($_POST['prenom'])) {
    $req = "SELECT nom,prenom from fournisseur where nom='" . $nom . "' or prenom='" . $prenom . "'";
    //var_dump($bdd); die();
    $exe = $bdd->query($req);
    $nbre = $exe->rowcount();
    if ($nbre != 0) {
        echo "<script type='text/javascript'>
alert('nom fournisseur existant');
window.location.href='../../?pages=fournisseur';
</script>";
        exit(1);
    } elseif ($nbre == 0) {
        $etat = 0;
        $deletable = 0;
        $sql = $bdd->prepare('INSERT INTO fournisseur(id_fournisseur,nom,prenom,adresse,telephone,email,date_enreg,etat,deletable)
VALUES(:id_fournisseur,:nom,:prenom,:adresse,:telephone,:email,:date_enreg,:etat,:deletable)');
        $sql->bindValue('id_fournisseur', '', PDO::PARAM_INT);
        $sql->bindValue('nom', $nom, PDO::PARAM_STR);
        $sql->bindValue('prenom', $prenom, PDO::PARAM_STR);
        $sql->bindValue('adresse', $adresse, PDO::PARAM_STR);
        $sql->bindValue('telephone', $telephone, PDO::PARAM_STR);
        $sql->bindValue('email', $email, PDO::PARAM_STR);
        $sql->bindValue('date_enreg', $date);
        $sql->bindValue('etat', $etat, PDO::PARAM_INT);
        $sql->bindValue('deletable', $deletable, PDO::PARAM_INT);
        $sql->execute() or die(print_r($sql->ERRORInfo()));
        echo "<script type='text/javascript'>
alert('Enregistrement reussie');
window.location.href='../../?pages=fournisseurs';
</script>";
        die();
    }
}
