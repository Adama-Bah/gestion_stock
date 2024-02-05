<?php
if (isset($_GET['id_produit'])) {
  $nom_produit = "";
  $categorie = "";
  $description = "";
  $prix = "";
  $date_E = "";
  $date_F = "";
  $ids = $_GET['id_produit'];
  $sql = "SELECT * FROM produit WHERE id_produit='" . $ids . "'";
  $exe = $bdd->query($sql);
  $row = $exe->rowcount();
  if ($row != 0) {
    ($line = $exe->FETCH(PDO::FETCH_ASSOC));
    extract($line);
    $nom_produit = $line['nom_produit'];
    $categorie = $line['categorie'];
    $description = $line['description'];
    $prix = $line['prix'];
    $date_E = $line['date_E'];
    $date_F = $line['date_F'];
    
  }
?>








<div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-purple">
              <h5 class="m-b-0">Modifier
              <a href="./?pages=produit&c=lister" class="btn btn-success pull-center"><i class="fa fa-tasks"></i> Lister </a>
              </h5>
            </div>
            <div class="card-body">
              <form method="POST" action="./exe/edit/update_produit.php" class="form-horizontal form-bordered">
              <input type="hidden" name="id_produit" value="<?php echo $ids; ?>">
                <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputdate_E1">Nom_produit<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Nom_produit" type="text" class="form-control" id="nom" value="<?php echo $nom_produit; ?>" name="nom_produit">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputdate_E1">Categorie<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Categorie" type="text" class="form-control" id="categorie"  value="<?php echo $categorie; ?>" name="categorie">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputdate_E1">Description<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Description" type="text" class="form-control" id="description" value="<?php echo $description; ?>" name="description">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputdate_E1">Prix<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Prix" type="text" class="form-control" id="prix" value="<?php echo $prix; ?>" name="prix">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row">
                <label for="exampleInputEmail1"> <?php if ($image != "") { ?><img src="./assets/img/image/<?php echo $image ?>" width="100" height="100">
                  <?php } elseif ($image == "") { ?><img src="./assets/img/image/default.jpg" width="100" height="100">
                  <?php } ?></label>
                <input type="file" name="image" class="form-control" id="image">
                </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputdate_E1">Date_Expi<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Date_E_produit" type="text" class="form-control" id="date_E" value="<?php echo $date_E; ?>" name="date_E">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputdate_E1">Date_Fabri<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Date_F_produit" type="text" class="form-control" id="date_F" value="<?php echo $date_F; ?>" name="date_F">
                      </div>
                  </div>
                  
                </div>
                <div class="checkbox">
                <label>
                  <input type="checkbox">
                  Check me out </label>
              </div>
              <button type="submit" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Modifier</button>
              </form>
            </div>
          </div>
</div>

<?php
} elseif (!isset($_GET['id'])) {
}
?>
