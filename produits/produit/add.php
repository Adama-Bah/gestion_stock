<div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-purple">
              <h5 class="m-b-0">Formulaire D'Ajout Des Produits
              <a href="./?page=produits&produit=list" class="btn btn-success pull-center"><i class="fa fa-tasks"></i> Lister </a>
              </h5>
            </div>
            <div class="card-body">
              <form method="post" action="./exe/add/submit_produit.php" class="form-horizontal form-bordered" enctype="multipart/form-data">

              <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Nom_produit<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="nom_produit" type="text" class="form-control" id="nom_produit" name="nom_produit">
                      </div>
                  </div>
                <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Categorie<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="categorie" type="text" class="form-control" id="categorie" name="categorie">
                      </div>
                  </div>
                  
                  
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Description<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="description" type="text" class="form-control" id="description" name="description">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Prix<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="prix" type="text" class="form-control" id="prix" name="prix">
                      </div>
                  </div>
                  
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Image<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="Image" type="file" class="form-control" id="image" name="image">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Date Expiration<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="date_Expiration" type="text" class="form-control" id="date_E" name="date_E">
                      </div>
                  </div>
                  <div class="form-body">
                <div class="form-group row"> 
                <label for="exampleInputEmail1">Date Fabrication<span style="color:red;"> *</span></label>
                    <div class="col-md-9">
                      <input placeholder="date_fabrication" type="text" class="form-control" id="date_F" name="date_F">
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
