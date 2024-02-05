<div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-purple">
              <h5 class="m-b-0">Formulaire D'Ajout Du Client
              <a href="./?page=clients&client=list" class="btn btn-success pull-center"><i class="fa fa-tasks"></i> Lister </a>
              </h5>
            </div>
            <div class="card-body">
              <form method="post" action="./exe/add/submit_client.php" class="form-horizontal form-bordered">
                <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Nom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Nom_Client" type="text" class="form-control" id="Nom_module" name="nom">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Prenom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Prenom_Client" type="text" class="form-control" id="prenom" name="prenom">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Adresse<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Adresse_Client" type="text" class="form-control" id="adresse" name="adresse">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Telephone<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Telephone_Client" type="text" class="form-control" id="telephone" name="telephone">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Email<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Email_Client" type="text" class="form-control" id="email" name="email">
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
