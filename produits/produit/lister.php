<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title"><a href="./?page=produits" class="btn btn-success pull-center" >Ajouter</a></h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">produit</a></li>
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
													<th>image</th>
                                                    <th>Nom_Produit</th>
                                                    <th>Categorie</th>
                                                    <th>Description</th>
                                                    <th>Prix</th>
                                                    <th>Date_Expi</th>
                                                    <th>Date_Fabri</th>
                                                    <th>Action</th>

													</tr>
												</thead>
												<tbody>
												<?php $requete = "SELECT * FROM produit WHERE deletable='0'order by id_produit ASC";
                $exe = $bdd->query($requete);
                $nbre = $exe->rowcount();
                if ($nbre != 0) {
                  while ($line = $exe->FETCH(PDO::FETCH_ASSOC)) {
                    extract($line);
                    $id = $line['id_produit'];
                    $image = $line['image'];
                    $nom_produit = $line['nom_produit'];
                    $categorie = $line['categorie'];
                    $description = $line['description'];
                    $prix = $line['prix'];
                    $datE = $line['date_E'];
                    $datF = $line['date_E'];

                ?>
                <tr>
				<td> <?php if ($image != "") { ?><img src="./assets/img/image/<?php echo $image ?>" width="50" height="50">
                        <?php } elseif ($image == "") { ?><img src="./assets/img/image/default.jpg" width="50" height="50">
                        <?php } ?></td>
                        
                      <td><?php echo $nom_produit ?></td>
                      <td><?php echo $categorie ?> </td>
                      <td><?php echo $description ?></td>
                      <td><?php echo $prix ?></td>
                      <td> <?php echo $datE ?></td>
                      <td> <?php echo $datF ?></td>
                      <td>
                        <a href="./?page=produit&c=voir&id_produit=<?php echo $id; ?>" class="btn btn-success">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="./?page=produits&produit=modifier&id_produit=<?php echo $id_produit ?>" class="btn btn-primary"><i class="fa fa-edit"> </i></a>
                        <a href="./exe/delete/delete_produit.php?id_produit=<?php echo $id; ?>" class="btn btn-danger" id="delete" onclick="return confirmer()">
                          <i class="fa fa-trash">
                            <input type="hidden" name="delete" value="<?php echo $id; ?>" class="del">
                          </i>
                        </a>
                        <a href="./exe/state/state_produit.php?id_produit=<?php echo $id; ?>">
                          <?php if ($etat == 0) {
                            echo "<div class='btn btn-danger'><i class='fa fa-thumbs-down'></i></div>";
                          } elseif ($etat == 1) {
                            echo "<div class='btn btn-success'><i class='fa fa-thumbs-up'></i></div>";
                          }
                          ?>
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