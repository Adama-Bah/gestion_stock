<?php
include("../../config.php");

if(isset($_GET['id_fournisseur']))
{
	$ids=$_GET['id_fournisseur'];
	$sql="SELECT*FROM fournisseur where id_fournisseur='".$ids."'";
	$exe=$bdd->query($sql);
	$nbre=$exe->rowCount();
	if($nbre!=0){
		$del="DELETE from fournisseur where id_fournisseur='".$ids."'";
		$exes=$bdd->query($del);
  
 echo
 "<script type='text/javascript'>
      alert('Enregistrement supprimez avec succés!');
     window.location.href='./../../?page=fournisseurs&fournisseur=list';
     </script>";exit(1);
 
}elseif($nbre==0){ 
    echo"
<script type='text/javascript'>
	alert('Enregistrement inexistant!!!');
	window.location.href='../../?page=fournisseurs&fournisseur=list';
</script>";exit(1);
}
}
elseif(!isset($_GET['id_fournisseur']))
{ 
    echo"
    <script type='text/javascript'>
        alert('id_fournisseur inexistant!!!');
        window.location.href='../../?page=fournisseurs&fournisseur=list';
    </script>";exit(1);
 } 
 ?>
