<div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-purple">
              <h5 class="m-b-0">Formulaire D'Achats
              <a href="./?page=achats&achat=list" class="btn btn-success pull-center"><i class="fa fa-tasks"></i> Lister </a>
              </h5>
            </div>
            <div class="card-body">
              <form method="post" action="./exe/add/submit_achat.php" class="form-horizontal form-bordered">
                <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">FOURNISSEUR: </label>
                <div class="col-md-9">
                <select class="form-control" id="" name="fournisseur">
                <?php
                $sql = "SELECT * FROM fournisseur WHERE etat = 1 order by id_fournisseur ASC ";
                $exe = $bdd->query($sql);
                $row = $exe->rowCount();
                if ($row != 0) {
                  while ($line = $exe->FETCH(PDO::FETCH_ASSOC)) {
                    extract($line);
                    $nom = $line['nom'];
                    $ids = $line['id_fournisseur'];
                    echo "<option value='$ids'> $nom </option>";
                  }
                }
                ?>
              </select> </div>
              </div>
              </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">PRODUIT:</label>
                <div class="col-md-9">
                <select class="form-control" id="" name="produit">
                <?php
                $sql = "SELECT * FROM produit WHERE etat = 1 order by id_produit ASC ";
                $exe = $bdd->query($sql);
                $row = $exe->rowCount();
                if ($row != 0) {
                  while ($line = $exe->FETCH(PDO::FETCH_ASSOC)) {
                    extract($line);
                    $nom = $line['nom_produit'];
                    $ids = $line['id_produit'];
                    echo "<option value='$ids'> $nom </option>";
                  }
                }
                ?>
              </select> </div>
              </div>
              </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Quantite<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="quantite_acheter" type="text" class="form-control" id="quantite" name="quantite">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Prix<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="prix_d'achat" type="text" class="form-control" id="prix" name="prix">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Date_Achat<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="date_achat" type="Date" class="form-control" id="date_achat" name="date_achat">
                      </div>
                  </div>
                  
                </div>
                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="offset-sm-3 col-md-9">
                          <button type="submit" class="btn btn-success"> Envoyer</button>
                          <button type="button" class="btn btn-inverse">Effacer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
</div>
