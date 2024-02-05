<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title"><a href="./?page=utilisateurs" class="btn btn-success pull-center" >Ajouter</a></h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utilisateur</a></li>
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
                                                    <th>Prenom</th>
                                                    <th>Nom</th>
                                                    <th>Email</th>
                                                    <th>Date enregistrement</th>
                                                    <th>Action</th>

													</tr>
												</thead>
												<tbody>
												<?php $requete = "SELECT * FROM utilisateur WHERE deletable='0'order by id_user ASC";
                $exe = $bdd->query($requete);
                $nbre = $exe->rowcount();
                if ($nbre != 0) {
                  while ($line = $exe->FETCH(PDO::FETCH_ASSOC)) {
                    extract($line);
                    $id = $line['id_user'];
                    $image = $line['image'];
                    $prenom = $line['prenom'];
                    $nom = $line['nom'];
                    $email = $line['email'];
                    $date = $line['date_enreg'];
                ?>
                <tr>
				<td> <?php if ($image != "") { ?><img src="./assets/img/image/<?php echo $image ?>" width="50" height="50">
                        <?php } elseif ($image == "") { ?><img src="./assets/img/image/default.jpg" width="50" height="50">
                        <?php } ?></td>
                      <td><?php echo $prenom ?></td>
                      <td><?php echo $nom ?> </td>
                      <td><?php echo $email ?></td>
      
                      <td> <?php echo $date ?></td>
                      <td>
                        <a href="./?page=utilisateur&c=voir&id_user=<?php echo $id; ?>" class="btn btn-success">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="./?page=utilisateur&c=modifier&id_user=<?php echo $id; ?>" class="btn btn-primary">
                          <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a href="./exe/delete/delete_Utilisateur.php?id_user=<?php echo $id; ?>" class="btn btn-danger" id="delete" onclick="return confirmer()">
                          <i class="fa fa-trash">
                            <input type="hidden" name="delete" value="<?php echo $id; ?>" class="del">
                          </i>
                        </a>
                        <a href="./exe/state/state_Utilisateur.php?id_user=<?php echo $id; ?>">
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