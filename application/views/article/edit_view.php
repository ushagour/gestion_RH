<!-- </br>
<div class="product-status mg-b-5 container-fluid">
	<div class="product-status-wrap" style="background: #147cfe;padding-bottom: 0px;padding-top: 0px;">
		<h2>
			<center>modifier les informations</center>
		</h2>
	</div>
</div> -->


<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcome-list">
					<div class="row">
					<div class="product-status mg-b-5 container-fluid">
						<div class="product-status-wrap" style="color: #000000; text-shadow: 2px 2px #10b7e4; padding-bottom: 0px;padding-top: 0px;">
							<h2>
								<center>Modifications des informations</center>
							</h2>
						</div>
					</div><hr>
						<div class="single-pro-review-area">
							<div id="myTabContent" class="tab-content custom-product-edit">
								<div class="product-tab-list tab-pane fade active in" id="description">
									<div class="row">

										<div class="col-md-12 ">

										<form action="<?php echo base_url()?>update-article"
												enctype="multipart/form-data" method="Post">
												<div class="col-md-12 ">


												<input hidden type="text" name="id" value="<?= $item->id; ?>" id="">

													<label class="col-md-2 control-label" for="">Catégories *</label>


													<div class="col-md-3">
													<select class="form-control pro-edt-select form-control-primary" style="text-transform: capitalize !important;"
															required name="id_cat" id="cat">
															<option value="">Veuillez choisir une catégorie</option>

															<?php foreach ($cats as $row) : ?>

															<option value="<?php echo $row->id ;?>"
																<?= ($row->id == $item->id_cat)?'selected ':'' ;?>>
																<?php echo $row->name;?></option>


															<?php endforeach; ?>
														</select>
													</div>
													<div class="col-md-1">

														<a href="<?=base_url()?>Categories"
															class="btn btn-primary">+</a>
													</div>
													<label class="col-md-2 control-label" for="">S-Catégories
														*</label>

													<div class="col-md-3">
														<select name="id_sous_cat" id="sub_category" style="text-transform: capitalize !important;"
															class="form-control pro-edt-select form-control-primary">
															<?php foreach ($sous_cats as $row) : ?>
															<option value="<?php echo $row->id ;?>"
																<?= ($row->id == $item->id_sous_cat)?'selected ':'' ;?>>
																<?php echo $row->souscatname;?></option>
															<?php endforeach;?>

														</select>

													</div>
													<div class="col-md-1">

														<a href="<?=base_url()?>SupCategories"
															class="btn btn-primary">+</a>
													</div>
												</div><br /><br />
												<hr>
												<div class="col-md-12">


													<div class="col-md-6 ">
														<div class="form-group ">

															<label for="address" class="form-label">Information
																*</label>
															<textarea required rows="5" cols="15" id="synthese"
																name="synthese" type="textarea"
																class="form-control"><?= $item->synthese;?></textarea>
															<?php echo form_error('synthese', '<div class="error">', '</div>'); ?>
														</div>
													</div>
													<div class="col-md-6 ">

														<div class="form-group ">
														<label for="address" class="form-label">Mesures Prises
																*</label>
															<textarea required rows="5" cols="15" id="mesure_prise"
																name="mesure_prise" value="test" type="textarea"
																class="form-control"><?= $item->mesure_prise;?></textarea>
															<?php echo form_error('mesure_prise', '<div class="error">', '</div>'); ?>
														</div>

													</div>
												</div><br /><br />
												<hr>
												<div class="row">
													<div class="col-md-12 ">

														<!------------  upload start  ---->
														<div class="col-md-6">
															<div class="review-content-section">
																<label>Source *</label>
																<div class="input-group input-group-lg mg-b-pro-edt">
																	<span class="input-group-addon"><i
																			class="fa fa-user"
																			aria-hidden="true"></i></span>
																			<input required type="text" id="source" style="text-transform: capitalize !important;"
																		name="source" class="form-control"
																		value="<?= $item->source;?>" require>
																	<?php echo form_error('source', '<div class="error">', '</div>'); ?>

																</div>

															</div>
														</div>
														<div class="col-md-6">
															<div class="review-content-section">
																<div id="data_4">
																	<label>Date D'événement *</label>
																	<div class="input-group input-group-lg date">
																		<span class="input-group-addon"><i
																				class="fa fa-calendar"></i></span>
																				<input type="date"
																			value="<?=date("Y-m-d",strtotime($item->date_evenement))?>"
																			class="form-control" id="date_evenement"
																			name="date_evenement">
																		<?php echo form_error('date_evenement', '<div class="error">', '</div>'); ?>
																	</div>
																</div>

															</div>
														</div>


													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">

														<div class="col-md-6">
															<div class="review-content-section">
																<label>Lieu *</label>
																<div class="input-group input-group-lg mg-b-pro-edt">
																	<span class="input-group-addon"><i
																			class="glyphicon glyphicon-globe"
																			aria-hidden="true"></i></span>
																			<input required type="text" id="lieu" name="lieu" style="text-transform: capitalize !important;"
																		class="form-control" value="<?= $item->lieu;?>"
																		require>
																	<?php echo form_error('lieu', '<div class="error">', '</div>'); ?>

																</div>

															</div>
														</div>
														<div class="col-md-6">
															<div class="review-content-section">
																<div id="data_4">
																	<label>Date de Traitement *</label>
																	<div class="input-group input-group-lg date">
																		<span class="input-group-addon"><i
																				class="fa fa-calendar"></i></span>
																				<input type="date"
																			value="<?=date("Y-m-d",strtotime($item->date_trait))?>"
																			class="form-control" id="date_trait"
																			name="date_trait">
																		<?php echo form_error('date_trait', '<div class="error">', '</div>'); ?>
																	</div>
																</div>

															</div>
														</div>


													</div>

													<div class="col-md-12 ">
														<div class="col-md-1">
														</div>
														<!------------  upload start  ---->
														<div class="col-md-10">
															<label>Piéce jointe *</label>
															<div
																class="file-upload-inner file-upload-inner-right ts-forms">
																<div class="input append-big-btn">
																	<label class="icon-left" for="append-big-btn">
																		<i class="fa fa-download"></i>
																	</label>
																	<div class="file-button">
																		Browse
																		<input type="file" name="piece_joint"
																			onchange="document.getElementById('piece_jointt').value = this.value;">
																	</div>
																	<input type="text" id="piece_jointt"
																		placeholder="no file selected">
																</div>
															</div>
														</div>

														<div class="col-md-1">
														</div>

													</div>



												</div>
												<br />
												<style>
													hr {
														height: 1px;
														background-color: #1458e0;
														border: none;
													}

												</style>
												<hr>
												<div class="row">
													<div class="col-md-12 ">
														<center>
														<div class="col-lg-6">
																<button type="submit"
																	class="btn btn-success btn-block">valider

																</button>

															</div>
															<div class="col-lg-6">
																<button type="reset"
																	class="btn btn-secundary btn-block">annuler

																</button>

															</div>
														
														</center>
													</div>
												</div>


											</form>




										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






















<script>
	$('#cat').on('change', function () {

		var id = this.value;

		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url();?>get-sup-categories/" + id,
			data: {
				id: id
			},
			dataType: 'HTML',
			success: function (data) {
				console.log(data);
				$('#sub_category').html(data); //out put li ghayttb3 
			}
		});

	});

</script>
