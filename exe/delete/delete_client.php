<?php
include("../../config.php");

if(isset($_GET['id_client']))
{
	$ids=$_GET['id_client'];
	$sql="SELECT*FROM client where id_client='".$ids."'";
	$exe=$bdd->query($sql);
	$nbre=$exe->rowCount();
	if($nbre!=0){
		$del="DELETE from client where id_client='".$ids."'";
		$exes=$bdd->query($del);
  
 echo
 "<script type='text/javascript'>
      alert('Enregistrement supprimez avec succés!');
     window.location.href='./../../?page=clients&client=list';
     </script>";exit(1);
 
}elseif($nbre==0){ 
    echo"
<script type='text/javascript'>
	alert('Enregistrement inexistant!!!');
	window.location.href='../../?page=clients&client=list';
</script>";exit(1);
}
}
elseif(!isset($_GET['id_client']))
{ 
    echo"
    <script type='text/javascript'>
        alert('id_client inexistant!!!');
        window.location.href='../../?page=clients&client=list';
    </script>";exit(1);
 } 
 ?>
