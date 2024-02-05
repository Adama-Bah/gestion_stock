<?php include("../../config.php");
	if (isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="select*from fournisseur where id_four='".$id."'";
		$exe=$bdd->query($sql);
		$row=$exe->rowCount();
		if($row=!0){
			$line=$exe->fetch(PDO::FETCH_ASSOC);
			extract($line);
			$valid=$line['etat'];
			$valu="";
			$message="";
			if($valid==1){
				$valu=0;
				$message="enregistrement desctivé!";
			}elseif($valid==0){
				$valu=1;
				$message="enregistrement activé!";
			}
			$up="UPDATE fournisseur set etat='".$valu."' where id_four='".$id."'";
			$exe=$bdd->query($up);?>

			<script>
				alert("<?php echo $message ?>");
				window.location.href="./../../?pages=fournisseur&c=Lister";
				</script>
			<?php }} ?>