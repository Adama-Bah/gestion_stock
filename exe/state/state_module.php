<?php include("../../config.php");
	if (isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="select*from module where id_mod='".$id."'";
		$exe=$bdd->query($sql);
		$row=$exe->rowCount();
		if($row=!0){
			$line=$exe->fetch(PDO::FETCH_ASSOC);
			extract($line);
			$valid=$line['validate'];
			$valu="";
			$message="";
			if($valid==1){
				$valu=0;
				$message="enregistrement desctivé!";
			}elseif($valid==0){
				$valu=1;
				$message="enregistrement activé!";
			}
			$up="UPDATE module set validate='".$valu."' where id_mod='".$id."'";
			$exe=$bdd->query($up);?>

			<script>
				alert("<?php echo $message ?>");
				window.location.href="./../../?pages=module&c=Lister";
				</script>
			<?php }} ?>