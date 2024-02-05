<?php
if (isset($_GET['id_user'])) {
  $nom = "";
  $prenom = "";
  $email = "";
  $password = "";
  $date_enreg = "";
  $image = "";
  $ids = $_GET['id_user'];
  $sql = "SELECT * FROM utilisateur WHERE id_user='" . $ids . "'";
  $exe = $bdd->query($sql);
  $row = $exe->rowcount();
  if ($row != 0) {
    ($line = $exe->FETCH(PDO::FETCH_ASSOC));
    extract($line);
    $nom = $line['nom'];
    $prenom = $line['prenom'];
    $email = $line['email'];
    $password = $line['password'];
    $date_enreg = $line['date_enreg'];
    $image = $line['image'];
  }
?>








<div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-purple">
              <h5 class="m-b-0">Modifier
              <a href="./?pages=utilisateur&c=lister" class="btn btn-success pull-center"><i class="fa fa-tasks"></i> Lister </a>
              </h5>
            </div>
            <div class="card-body">
              <form method="POST" action="./exe/edit/update_utilisateur.php" class="form-horizontal form-bordered">
              <input type="hidden" name="id_user" value="<?php echo $ids; ?>">
                <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Nom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Nom_utilisateur" type="text" class="form-control" id="nom" value="<?php echo $nom; ?>" name="nom">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Prenom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Prenom_utilisateur" type="text" class="form-control" id="prenom"  value="<?php echo $prenom; ?>" name="prenom">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">email<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="email_utilisateur" type="text" class="form-control" id="email" value="<?php echo $email; ?>" name="email">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">password<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="password_utilisateur" type="text" class="form-control" id="password" value="<?php echo $password; ?>" name="password">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Date Enregistrement<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="date_enregistrement" type="Date" class="form-control" id="email" value="<?php echo $email; ?>" name="date_enreg">
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
} elseif (!isset($_GET['id_user'])) {
}
?>
