<div class="breadcome-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcome-list">
					<div class="row">
						<div class="single-pro-review-area">
							<div id="myTabContent" class="tab-content custom-product-edit">
								<div class="product-tab-list tab-pane fade active in" id="description">
									<div class="row">

										<div class="col-md-12 ">

											<form action="<?php echo base_url()?>add-articles"
												enctype="multipart/form-data" method="Post">
												<div class="col-md-12 ">



													<label class="col-md-2 control-label" for="">Catégories *</label>


													<div class="col-md-3">
														<select class="form-control pro-edt-select form-control-primary"
															name="id_cat" id="cat" style="text-transform: capitalize !important;">
															<option value="0">Choisir une catégorie</option>

															<?php foreach ($cats as $row) { ?>

															<option value="<?php echo $row->id ;?>">
																<?php echo $row->name ;?></option>


															<?php   } ?>
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
															<textarea rows="5" cols="15" id="synthese" name="synthese"
																type="textarea" class="form-control"></textarea>
															<?php echo form_error('synthese', '<div class="error">', '</div>'); ?>
														</div>
													</div>
													<div class="col-md-6 ">
														<div class="form-group ">
															<label for="address" class="form-label">Mesure Prise
																*</label>
															<textarea rows="5" cols="15" id="mesure_prise"
																name="mesure_prise" type="textarea"
																class="form-control"></textarea>
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
																	<input type="text" id="source" name="source"
																		class="form-control" placeholder="Source"
																		require>
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
																		<input type="date" value="<?= date("Y-m-d")?>"
																			class="form-control" id="date_evenement"
																			name="date_evenement" require>
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
																	<input type="text" id="lieu" name="lieu"
																		class="form-control" placeholder="Lieu" require>
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
																		<input type="date" value="<?= date("Y-m-d")?>"
																			class="form-control" id="date_trait"
																			name="date_trait" require>
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
															<!-- <div class="col-lg-4">

																<div class="input-group input-group-lg mg-b-pro-edt">
																	<span class="input-group-addon"><i
																			class="fa big-icon fa-save icon-wrap"
																			aria-hidden="true"></i></span>
																	<button style=" background-color:#00bcd4;"
																		type="submit"
																		class="btn btn-primary btn-block">Enregistrer
																		
																	</button>
																</div>
															</div> -->
															<div class="login-social-inner">
															<div class="col-md-3">
												             </div>
															<div class="col-md-2">
																<button type="submit"
																class="button btn-social basic-ele-mg-b-10 facebook span-left"><i class="fa fa-save"></i></span> Enregistrer </a>

																</button>

															</div>
															<div class="col-md-2">
																<button type="button"
																class="button btn-social basic-ele-mg-b-10 twitter span-left"><i class="fa fa-eye"></i></span> Afficher </a>

																</button>

															</div>
															<div class="col-md-2">
																<button type="button"
																class="button btn-social basic-ele-mg-b-10 linkedin span-left"><i class="fa fa-print"></i></span> Imprimer </a>

																</button>

															</div>
															<div class="col-md-3">
												             </div>
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
					$('#sub_category').html(data); //out put li ghayttb3 
				}
			});

		});

	</script>
