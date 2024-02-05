<?php
if (isset($_GET['id_client'])) {
  $nom = "";
  $prenom = "";
  $adresse = "";
  $telephone = "";
  $email = "";
  $ids = $_GET['id_client'];
  $sql = "SELECT * FROM client WHERE id_client='" . $ids . "'";
  $exe = $bdd->query($sql);
  $row = $exe->rowcount();
  if ($row != 0) {
    ($line = $exe->FETCH(PDO::FETCH_ASSOC));
    extract($line);
    $nom = $line['nom'];
    $prenom = $line['prenom'];
    $adresse = $line['adresse'];
    $telephone = $line['telephone'];
    $email = $line['email'];
  }
?>








<div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-purple">
              <h5 class="m-b-0">Modifier
              <a href="./?pages=client&c=lister" class="btn btn-success pull-center"><i class="fa fa-tasks"></i> Lister </a>
              </h5>
            </div>
            <div class="card-body">
              <form method="POST" action="./exe/edit/update_client.php" class="form-horizontal form-bordered">
              <input type="hidden" name="id_client" value="<?php echo $ids; ?>">
                <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Nom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Nom_Client" type="text" class="form-control" id="nom" value="<?php echo $nom; ?>" name="nom">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Prenom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Prenom_Client" type="text" class="form-control" id="prenom"  value="<?php echo $prenom; ?>" name="prenom">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Adresse<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Adresse_Client" type="text" class="form-control" id="adresse" value="<?php echo $adresse; ?>" name="adresse">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Telephone<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Telephone_Client" type="text" class="form-control" id="telephone" value="<?php echo $telephone; ?>" name="telephone">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Email<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Email_Client" type="text" class="form-control" id="email" value="<?php echo $email; ?>" name="email">
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
} elseif (!isset($_GET['id_client'])) {
}
?>
