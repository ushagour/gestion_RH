
<div class="col-md-12">



      <h4><small> resultat du recherch  </small></h4>
      <hr>
  

       
      <section class="panel">
            <header class="panel-heading">
			<form action="<?php echo base_url();?>search" method="post">
			<div class="input-group col-md-4">
			<input type="text" class="form-control" name="CIN" placeholder="Search personnel par cin ..">
			&nbsp;			  
			<div class="input-group-btn">

                           <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> </button>
                                 </div>
         </div>

	  </form>

	  <br>
									</header>
            <div class="panel-body" id="o">


		<?php	if(isset($serch)) { ?>

			<div class="table-responsive table--no-card table-dark m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                      
									<thead>
										<tr>
											<th>id</th>
											<th>nom</th>
											<th>prenom</th>
											<th>sexe</th>
                                            <th>cin</th>
											<th>operation</th>
                      
                      
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
					<?php 
					
					
					
					foreach($serch as $item):?>
										<tr>
								           <td><?=$item->id;?></td>
											<td><?=$item->nom;?></td>
											<td><?=$item->prenom;?></td>
                                             <td><?=$item->gender;?></td>
										    	<td><?=$item->CIN;?></td>
											
                    

											<td class="actions">
											<!-- <a class="bg-circle bg-primary" data-toggle="modal" href="#myModal1<?=$item->id;?>"> -->


												<a href="#detaimodal<?=$item->id;?>"  data-toggle="modal" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
												&nbsp;
												<button onclick="del(<?=$item->id;?>)" class="btn btn-danger"><i class="fas fa-trash"></i></button>
												&nbsp;
												<a href="<?=base_url()?>edit_personnel/<?php echo $item->id ;?>" class="btn btn-info"><i
									class="fas fa-user-edit"></i></a>
							
											</td>
										</tr>
				
									</tbody>
								
                                    
                                    </table>
                                    <center>
						<?php echo $links; ?>

						<p style="text-align:right!important;">
							<smal><?php echo $nbr_page; ?></small>
						</p>

					</center>
                                </div>

					<div class="modal fade" id="detaimodal<?=$item->id;?>" tabindex="-1" role="dialog"
						aria-labelledby="mediumModalLabel" aria-hidden="true">


						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
								<?php if ($item->type_stage){?>
											<h5 class="modal-title" id="smallmodalLabel">Information du Stagaire(e) </h5>

										<?php } else{?>
											<h5 class="modal-title" id="smallmodalLabel">Information d'employer(e) </h5>

										<?php } ?>									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-4">
													<img class="img-fluid"
														src="<?= base_url().'assets/files/'.$item->photo;?>">

												</div>
												<div class="col-sm-8">
													<ul class="list-group">


														<li class="list-group-item"><B>Nom :</B> &nbsp;
															<?=
												 ($item->gender =="Male")? "Mr ".$item->nom." ".$item->prenom : "Mlle ".$item->nom." ".$item->prenom; 
												?>
														</li>

														<li class="list-group-item"><B>CIN :</B> &nbsp;
															<?= $item->CIN; ?></li>
														<li class="list-group-item"><B>Address :</B> &nbsp;
															<?= $item->Address; ?></li>
														<li class="list-group-item"><B>telephone :</B> &nbsp;
															<?= $item->telephone; ?></li>
														<?php if($item->type_stage){?>
														<li class="list-group-item"><B>Stage :</B> &nbsp;
															<?= $item->type_stage; ?></li>
															<li class="list-group-item"><B>Service :</B> &nbsp;
															<?= $item->service; ?></li>
														<li class="list-group-item"><B>Poste chargé:</B> &nbsp;
															<?= $item->poste; ?></li>
															<li class="list-group-item"><B>Remuniration  :</B> &nbsp;
															<?= $item->salaire; ?></li>
														<?php } 
														else { ?>
														<li class="list-group-item"><B>Service :</B> &nbsp;
															<?= $item->service; ?></li>
														<li class="list-group-item"><B>Poste chargé:</B> &nbsp;
															<?= $item->poste; ?></li>
														<li class="list-group-item"><B>Type de contrat :</B> &nbsp;
															<?= $item->contrat; ?></li>
														<li class="list-group-item"><B>Salaire :</B> &nbsp;
															<?= $item->salaire; ?></li>

															<?php }?>


													</ul>
												</div>

											</div>






										</div>
										<div class="card-footer">
											<strong class="card-title mb-3">

												<button class="btn">
													Contacter <span class="badge badge-primary"></span>
												</button> </strong>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<?php endforeach;?>

								<?php } ?>
            </div>

            
        </section>
		
	
   
	 </div>
	</div>
	
<script>
	function del(id) {
		//console.log(id)
		if (confirm("Voulez vous supprimer l'employé"))
			jQuery.ajax({
				type: "GET",
				url: "<?php echo base_url();?>delete-personnel/" + id,

				success: function (data) {

					$('#o').load(location.href + " #o");


					//	console.log(data);
				},
				error: function (data) {
					alert("erreur !");
				}
			});

	}
					</script>





