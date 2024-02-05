<div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-purple">
              <h5 class="m-b-0">Formulaire D'Ajout Du utilisateur
              <a href="./?page=utilisateurs&utilisateur=list" class="btn btn-success pull-center"><i class="fa fa-tasks"></i> Lister </a>
              </h5>
            </div>
            <div class="card-body">
              <form method="post" action="./exe/add/submit_utilisateur.php" class="form-horizontal form-bordered" enctype="multipart/form-data">

              <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Prenom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Prenom" type="text" class="form-control" id="Prenom" name="prenom">
                      </div>
                  </div>
                <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Nom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Nom" type="text" class="form-control" id="Nom" name="nom">
                      </div>
                  </div>
                  
                  
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Email<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Email" type="text" class="form-control" id="Email" name="email">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Mot De Passe<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Mot De Passe" type="text" class="form-control" id="Mot De Passe" name="password">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Mot De Passe<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Confirme mot de passe" type="text" class="form-control" id="prix" name="confirm_password">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Image<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Image" type="file" class="form-control" id="image" name="image">
                      </div>
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
