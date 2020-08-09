<h4><small> Liste du Personnels </small></h4>
<hr>

<div class="row">
	<div class="col-md-12" id="tab">
		<div class="col-md-4">

			<form action="<?php echo base_url();?>search" class="col" method="post">
				<div class="input-group ">
					<input type="text" class="form-control" name="CIN" placeholder="Search personnel par cin ..">
					&nbsp;
					<div class="input-group-btn">

						<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> </button>
					</div>
				</div>

			</form>
		</div>

		<div class="col" style="text-align: right!important; padding-bottom: 5px;  ">
			<a href="<?=base_url()?>print-etat" target="_blank" class="btn btn-info btn-flat"
				style=" border-radius: 30px; <?= ($canprint)?" ":"display: none;" ?>  "><i
					class="fa fa-print"></i><b>&nbsp;Imprimer</b></a>



			<button onclick="check_all()" style=" border-radius: 30px; " class="btn btn-info btn-flat"><i
					class="fa fa-check" aria-hidden="true"></i> Selectionne tout</button>

		</div>




		<?php	if(isset($infoperssonel)) { ?>

		<div class="table-responsive-md">
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





							<a href="#detaimodal<?=$item->id;?>" data-toggle="modal" class="btn btn-secondary"><i
									class="fas fa-eye"></i></a>
							<button onclick="del(<?=$item->id;?>)" class="btn btn-danger"><i
									class="fas fa-trash"></i></button>
							<a href="<?=base_url()?>edit_personnel/<?php echo $item->id ;?>" class="btn btn-info"><i
									class="fas fa-user-edit"></i></a>
							<button onclick="valider_ar(<?php echo $item->id ;?>,<?php echo  $item->checked ;?>)"
								class="btn btn-<?= ($item->checked)?"success":"dark" ?>"><i class="fa fa-check"
									aria-hidden="true"></i></button>


						</td>
					</tr>
					<!-- todo nkmlo had modal dyal detail profile -->
					<div class="modal fade" id="detaimodal<?=$item->id;?>" tabindex="-1" role="dialog"
						aria-labelledby="mediumModalLabel" aria-hidden="true">


						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
								<?php if ($item->type_stage){?>
											<h5 class="modal-title" id="smallmodalLabel">Information du Stagaire(e) </h5>

										<?php } 
										else{?>
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

				</tbody>


			</table>
		</div>

		<?php } ?>



	</div>

	<a href="#" title="Haut de page" class=" scrollup "><i class="fa fa-arrow-up"></i></a>

</div>

</div>

<!-- modal small -->

<!-- end modal small		 -->

<script>
	function del(id) {
		//console.log(id)
		if (confirm("Voulez vous supprimer l'employé"))
			jQuery.ajax({
				type: "GET",
				url: "<?php echo base_url();?>delete-personnel/" + id,

				success: function (data) {

					$('#tab').load(location.href + " #tab");


					//	console.log(data);
				},
				error: function (data) {
					alert("erreur !");
				}
			});

	}

	function valider_ar(id, state) {
		console.log(id, state)
		jQuery.ajax({
			type: "GET",
			url: "<?php echo base_url();?>check/" + id + "/" + state,

			success: function (data) {
				$('#tab').load(location.href + " #tab");


				console.log(data);
			},
			error: function (data) {
				//  alert("impression impossible !");
			}
		});

	}

	function check_all() {
		jQuery.ajax({
			type: "GET",
			url: "<?php echo base_url();?>check-all",

			success: function (data) {
				$('#tab').load(location.href + " #tab");


				console.log(data);
			},
			error: function (data) {
				//  alert("impression impossible !");
			}
		});

	}



	ScrollToTop = function () {
		var s = $(window).scrollTop();
		if (s > 250) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}

		$('.scrollup').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	}

	StopAnimation = function () {
		$("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup", function () {
			$('html, body').stop();
		});
	}


	$(window).scroll(function () {
		ScrollToTop();
		StopAnimation();
	});

</script>
