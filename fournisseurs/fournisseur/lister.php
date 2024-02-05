<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title"><a href="./?page=fournisseurs" class="btn btn-success pull-center" >Ajouter</a></h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">fournisseur</a></li>
								<li class="breadcrumb-item active" aria-current="page">Liste</li>
							</ol>
						</div>


<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Listes Des Enregistrements</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
												<thead>
													<tr class="border-bottom-0">
												        <th >id</th>
														<th >Nom</th>
														<th>Prenom</th>
														<th>Adresse</th>
														<th>Telephone</th>
														<th>E-mail</th>
														<th>Date d'enregistrement</th>
														<th >Action</th>

													</tr>
												</thead>
												<tbody>
												<?php 
$list="SELECT * FROM fournisseur where deletable='0' order by id_fournisseur ASC";
$exe= $bdd->query($list);
$nbre= $exe->rowcount();
 if($nbre!=0){
 while ($line=$exe->fetch (PDO:: FETCH_ASSOC)){
 extract($line);
 $id=$line['id_fournisseur'];
 $nom=$line['nom'];
 $prenom=$line['prenom'];
 $adresse=$line['adresse'];
 $telephone=$line['telephone'];
 $email=$line['email'];
 $date=$line['date_enreg'];

?> 
                <tr>
                  <td><?php echo $id_fournisseur;?></td>
                  <td><?php echo $nom;?></td>
                  <td><?php echo $prenom;?></td>
				  <td><?php echo $adresse;?></td>
				  <td><?php echo $telephone;?></td>
				  <td><?php echo $email;?></td>
                  <td><?php echo $date;?></td>
                  <td><a href="./?page=fournisseurs&fournisseur=voir&id_fournisseur=<?php echo $id_fournisseur ?>" class="btn btn-success"><i class="fa fa-eye"> </i></a>
                      <a href="./?page=fournisseurs&fournisseur=modifier&id_fournisseur=<?php echo $id_fournisseur ?>" class="btn btn-primary"><i class="fa fa-edit"> </i></a>
                      <a href="./exe/delete/delete_fournisseur.php?id_fournisseur=<?php echo $id_fournisseur; ?>" class="btn btn-danger" id_fournisseur="delete" onclick="return confirmer()">
                          <i class="fa fa-trash">
                            <input type="hidden" name="delete" value="<?php echo $id; ?>" class="del">
                          </i>
                        </a>
                </td>
                  </tr>
				<?php 
}
}
?>
													
												</tbody>
											</table>
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>

							<script>
    function confirmer() {
      if (confirm(" confirmez-vous la suppression"))
        return true;
      else
        return false;
    }
  </script>
						</div>