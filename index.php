<?php include ('config.php');
$ver = "SELECT * FROM utilisateur ";
$vex = $bdd->query($ver);
$vor = $vex->rowCount();
if ($vor == 0) {
  include("resister.php");
} elseif ($vor != 0) {

  if (!isset($_SESSION['root'])) {
  
    include("./login.php");
  
  } elseif (isset($_SESSION['root'])) {
  
    $login = $_SESSION['root'];
    $nom = "";
    $prenom = "";
    $groupe = "";
    $sql = $bdd->prepare = ("SELECT * FROM utilisateur WHERE email= '" . $login . "'");
    $exe = $bdd->query($sql);
    $row = $exe->rowCount();
    if ($row != 0) {
      $line = $exe->fetch(PDO::FETCH_ASSOC);
      extract($line);
      $nom = $line['nom'];
      $prenom = $line['prenom'];
      $groupe = $line['groupe'];
    }
    $sql = $bdd->prepare = ("SELECT * FROM groupe WHERE id_groupe='" . $groupe . "'");
    $exe = $bdd->query($sql);
    $row = $exe->rowCount();
    if ($row != 0) {
      $line = $exe->fetch(PDO::FETCH_ASSOC);
      extract($line);
      $id = $line['id_groupe'];
    }
	 ?>
<!doctype html>
<html lang="en" dir="ltr">
<?php 
              include ("./page/head.php")
              
          ?> 
	<body class="">
		<div id="global-loader"></div>
		<div class="page">
			<div class="page-main">
            <?php include("./page/header.php") ?>
				<div class="wrapper">
					<!-- Sidebar Holder -->
         <?php include("./page/menu.php") ?>
         <?php include("./page/content.php") ?>
					
				</div>
			</div>

			<!--footer-->
			<?php include("./page/footer.php") ?>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
        <?php include("./page/js.php") ?>

	</body>
</html>
<?php }
} ?>