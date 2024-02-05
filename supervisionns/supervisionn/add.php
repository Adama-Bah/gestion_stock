<div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-purple">
              <h5 class="m-b-0">Formulaire D'Ajout Du groupe
              <a href="./?page=groupes&groupe=list" class="btn btn-success pull-center"><i class="fa fa-tasks"></i> Lister </a>
              </h5>
            </div>
            <div class="card-body">
              <form method="post" action="./exe/add/submit_groupe.php" class="form-horizontal form-bordered">
                <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Nom<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Nom_groupe" type="text" class="form-control" id="Nom_groupe" name="nom_groupe">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Captions<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="diminutif" type="text" class="form-control" id="Caption_groupe" name="caption_groupe">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Details<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Detail" type="text" class="form-control" id="detail" name="detail">
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
