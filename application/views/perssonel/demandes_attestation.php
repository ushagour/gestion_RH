
		<h4><small> Demandes D'attestations  </small></h4>
		<hr>

		<div class="row">
		<div class="col-md-12" id="tab">
		<div class="col-md-6">

				<form action="<?= base_url();?>Dashbord/serch_for_attestation" class="col" method="post">
					<div class="input-group ">
		

						<input type="text" class="form-control" name="CIN" placeholder="Search personnel par cin ..">
						&nbsp;
						<div class="input-group-btn">

							<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> </button>
						</div>
					</div>

				</form>
				</div>
<br>
		


				<?php	if(!empty($infoperssonel)) { ?>

				<div class="table-responsive-md"  >
					<table class="table">

						<thead class="thead-dark">
							<tr>
							<th>cin</th>

								<th>nom</th>
								<th>prenom</th>
								<th>operation</th>


							</tr>
						</thead>
						<tbody class="thead-light">
							<tr class="gradeX">
								<?php 
					
					
					
					foreach($infoperssonel as $item):?>
							<tr>
							<td><?=$item->CIN;?></td>
								<td><?=$item->nom;?></td>
								<td><?=$item->prenom;?></td>



								<td class="actions">
									<!-- <a class="bg-circle bg-primary" data-toggle="modal" href="#myModal1<?=$item->id;?>"> -->


									<a href="#detaimodal<?=$item->CIN;?>" data-toggle="modal" title=" plus information"
										class="btn btn-secondary"><i class="fas fa-eye"></i></a>
								<?php if ($item->type_stage){?>

								<a href="<?=base_url()?>generatePDF/<?php echo $item->id ;?>/stage" title="Imprimer l'attestation " target="_blank"
										class="btn btn-warning"> <i class="fas fa-print" 
											aria-hidden="true"></i></button></a>

								<?php }
								else{ ?>
												<a href="<?=base_url()?>generatePDF/<?php echo $item->id ;?>/travaile" title="Imprimer l'attestation " target="_blank"
												class="btn btn-warning"> <i class="fas fa-print" 
													aria-hidden="true"></i></button></a>
													<?php	} ?>
							
								</td>
							</tr>



							<!-- todo nkmlo had modal dyal detail profile -->
							<div class="modal fade" id="detaimodal<?=$item->CIN;?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">

			
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<?php if ($item->type_stage){?>
											<h5 class="modal-title" id="smallmodalLabel">Information du Stagaire(e) </h5>

										<?php } else{?>
											<h5 class="modal-title" id="smallmodalLabel">Information d'employer(e) </h5>

										<?php } ?>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="card">
												<div class="card-body">
                                                 <div class="row">

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
													 <div class="col-sm-4">
													<img class="img-fluid" src="<?= base_url().'assets/files/'.$item->photo;?>">
															
													 </div>
												 </div>
											
												
													<!--  -->

												


												</div>
												<div class="card-footer">
													<strong class="card-title mb-3">
													
<button class="btn">
	Contacter <span class="badge badge-primary"></span>
</button>													</strong>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<?php endforeach;?>

						</tbody>


					</table>
				</div>

				<?php } ?>
			


		</div>

		<a href="#" title="Haut de page" class="scrollup" ><i class="fa fa-arrow-up"></i></a>

		</div>

</div>

<!-- modal small -->

<!-- end modal small		 -->

<script>

</script>
