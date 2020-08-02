<div class="col-md-12">


	<h4><small> Modifier Personnel </small></h4>
	<hr>
	<style>
		.error {
			color: red;
		}

	</style>
	<form action="<?php echo base_url();?>update" enctype="multipart/form-data" method="post">
		<input hidden type="text" name="id" value="<?= $item->id;?>">
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="nom"
					value="<?= $item->nom;?>" required>
				<small id="helpId" class="form-text text-muted">
					<?php echo form_error('nom', '<div class="error">','</div>'); ?>
				</small>
			</div>
			<div class="form-group col-md-4">
				<input type="text" value="<?= $item->prenom;?>" class="form-control" id="prenom" name="prenom"
					placeholder="prenom" required>
				<small id="helpId" class="form-text text-muted">
					<?php echo form_error('prenom', '<div class="error">', '</div>'); ?>
				</small>
			</div>
			<div class="form-group col-md-4">
				<input type="date" value="<?= $item->date_naissance;?>" class="form-control" id="date_naissance"
					name="date_naissance" placeholder="" required>
				<small id="date_naissance" class="form-text text-muted">
					<?php echo form_error('date_naissance', '<div class="error">', '</div>'); ?>
				</small>
			</div>


		</div>

		<div class="form-row">
			<div class="form-group col-md-2">
				<input type="text" value="<?= $item->CIN;?>" required class="form-control" id="CIN" name="CIN"
					placeholder="CIN">
				<small id="helpId" class="form-text text-muted">
					<?php echo form_error('CIN', '<div class="error">', '</div>'); ?>
				</small>
			</div>
			<div class="form-group col-md-4">
				<input type="text" value="<?= $item->telephone;?>" required class="form-control" id="telephone"
					name="telephone" placeholder="060000000">
				<small id="telephone" class="form-text text-muted">
					<?php echo form_error('telephone', '<div class="error">', '</div>'); ?>
				</small>
			</div>
			<div class="form-group col-md-6">
				<input type="text" value="<?= $item->Address;?>" required class="form-control" id="Address"
					name="Address" placeholder="1234 Main St">
				<small id="Address" class="form-text text-muted">
					<?php echo form_error('Address', '<div class="error">', '</div>'); ?>
				</small>
			</div>

		</div>

		<div class="form-row">
			<div class="form-group col-md-12">

				<div class="form-check">


					<input type="radio" name="gender" value="Male" <?php 
                              echo set_value('gender', $item->gender) =="Male"? "checked" : ""; 
                                 ?> /> Male
					&nbsp;
					<input type="radio" name="gender" value="Female" <?php 
                              echo set_value('gender', $item->gender) == "Female" ? "checked" : ""; 
                                  ?> /> Female


				</div>

			</div>

		</div>
		<div class="form-row">

			<div class="form-group col-md-12" id="prs_img">
				<label for="userfile">Image</label>
				<input type="file" class="form-control" id="userfile" name="userfile">
				<small id="helpId" class="form-text text-muted">
					<?php echo form_error('photo', '<div class="error">', '</div>'); ?>
				</small>

			</div>

		</div>


		<div>
			<h4 class="pt-2"><small> Information professionnel </small></h4>
			&nbsp;
			&nbsp;



			<div class="form-row">
				<div class="form-group col-md-3">
				<label for="service">service</label>
					<input type="text" required class="form-control" id="service" name="service" value="<?= $item->service;?>">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('service', '<div class="error">', '</div>'); ?>
					</small>
				</div>
			
					<div class="form-group col-md-3">
					<label for="poste">poste</label>
						<input type="text" required class="form-control" id="poste"  name="poste" value="<?= $item->poste;?>">
						<small id="helpId" class="form-text text-muted">
							<?php echo form_error('poste', '<div class="error">', '</div>'); ?>
						</small>
					</div>

					<div class="form-group col-md-3" style=" <?= ($item->type_stage)?"display:none;":""; ?>">
					<label for="contrat"> Type de contrat </label>

						<select class="custom-select" name="contrat" id="contrat">
							<option value="<?= $item->contrat;?>" selected><?= $item->contrat;?></option>
							<option value="CDI">CDI</option>
							<option value="CDD">CDD</option>

						</select>
					</div>
			
				<div class="form-group col-md-3">
				<label for="salaire">salaire</label>

					<input type="text" required class="form-control" id="salaire" name="salaire" value="<?= $item->salaire;?>">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('salaire', '<div class="error">', '</div>'); ?>
					</small>
				</div>

			</div>




			<div class="form-row" id="stagiare" style="<?= ($item->type_stage)?" ":"display:none;"; ?>">

				<div class="form-group col-md-8 ">
					<label>Date de debut</label>

					<input type="date" class="form-control" name="date_debut" id="date_debut" value="<?= $item->date_debut;?>" >
					<label>Date du fin</label>
					<input type="date" class="form-control" name="date_fin" id="date_fin" value="<?= $item->date_fin;?>" >

				</div>

				<div class="form-group col-md-4 ">
					<label for="type_stage"> Type de stage </label>
					<select class="custom-select" name="type_stage" id="type_stage">
						<option value="<?= $item->type_stage;?>" selected><?= $item->type_stage;?></option>
						<option value="SFF">Stage de fin de formation </option>
						<option value="SP">Stage profitionnel</option>

					</select>


				
				</div>
			</div>

		</div>


		<center>


			<input type="submit" class="btn btn-success " style="margin-right: 10px;" value="valider">
			<!-- TODO BUTTON RETOUR EN ARRIERE  -->
			<button onclick="location.href='<?= base_url() ?>affichage'" class="btn btn-info "
				style="margin-right: 10px;" type="button">
				Anuuler
			</button>
		</center>



	</form>
</div>





</div>
