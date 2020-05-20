<div id="content">

	<div class="col-md-12">


		<h4><small> Modifier  Personnel </small></h4>
		<hr>
		<style>
			.error {
				color: red;
			}
		</style>
		<form action="<?php echo base_url();?>update" enctype="multipart/form-data" method="post">
			<div class="form-row">
				<div class="form-group col-md-4">
					<input type="text" class="form-control" name="nom" id="nom" aria-describedby="helpId"
						placeholder="nom" value="<?= $item->nom;?>" required>
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('nom', '<div class="error">','</div>'); ?>
					</small>
				</div>
				<div class="form-group col-md-4">
					<input type="text" value="<?= $item->prenom;?>" class="form-control" id="prenom" name="prenom" placeholder="prenom" required>
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('prenom', '<div class="error">', '</div>'); ?>
					</small>
				</div>
				<div class="form-group col-md-4">
					<input type="date" value="<?= $item->date_naissance;?>" class="form-control" id="date_naissance" name="date_naissance" placeholder=""
						required>
					<small id="date_naissance" class="form-text text-muted">
						<?php echo form_error('date_naissance', '<div class="error">', '</div>'); ?>
					</small>
				</div>


			</div>

			<div class="form-row">
				<div class="form-group col-md-2">
					<input type="text" value="<?= $item->CIN;?>" required class="form-control" id="CIN" name="CIN" placeholder="CIN">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('CIN', '<div class="error">', '</div>'); ?>
					</small>
				</div>
				<div class="form-group col-md-4">
					<input type="text" value="<?= $item->telephone;?>" required class="form-control" id="telephone" name="telephone"
						placeholder="060000000">
					<small id="telephone" class="form-text text-muted">
						<?php echo form_error('telephone', '<div class="error">', '</div>'); ?>
					</small>
				</div>
				<div class="form-group col-md-6">
					<input type="text" value="<?= $item->Address;?>" required class="form-control" id="Address" name="Address"
						placeholder="1234 Main St">
					<small id="Address" class="form-text text-muted">
						<?php echo form_error('Address', '<div class="error">', '</div>'); ?>
					</small>
				</div>

			</div>

			<div class="form-row">
				<div class="form-group col-md-12">

					<div class="form-check">
						<input id="gender" name="gender" type="radio" class="" value="Male" />
						<label for="gender" class="">Male</label>

						<input id="gender" name="gender" type="radio" class="" value="Female" />
						<label for="gender" class="">Female</label>

						<small id="helpId" class="form-text text-muted">
							<?php echo form_error('gender', '<div class="error">', '</div>'); ?>
						</small>

					</div>

				</div>

			</div>
			<div class="form-row">

				<div class="form-group col-md-12">
					<label>Image</label>
					<input type="file"  class="form-control" id="userfile" name="userfile">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('photo', '<div class="error">', '</div>'); ?>
					</small>
				</div>

			</div>

			<h4 class="pt-2"><small> Information professionnel</small></h4>
			<hr>

			<div class="form-row">
				<div class="form-group col-md-4">
					<input type="text" value="<?= $item->service;?>" required class="form-control" id="service" name="service" placeholder="service">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('service', '<div class="error">', '</div>'); ?>
					</small>
				</div>
				<div class="form-group col-md-4">
					<input type="text"value="<?= $item->poste;?>" required class="form-control" id="poste" name="poste" placeholder="poste">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('poste', '<div class="error">', '</div>'); ?>
					</small>
				</div>
				<div class="form-group col-md-4">
					<input type="text" value="<?= $item->salaire;?>" required class="form-control" id="salaire" name="salaire" placeholder="salaire">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('salaire', '<div class="error">', '</div>'); ?>
					</small>
				</div>

			</div>
			<center>


				<input type="submit" class="btn btn-success " style="margin-right: 10px;" value="valider">
			<!-- TODO BUTTON RETOUR EN ARRIERE  -->
				<input type="button" class="btn btn-info " style="margin-right: 10px;" value="annuler">
			</center>



		</form>
	</div>





</div>