<div id="content">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
     
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
               
				<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
	<i class="fas fa-user-cog"></i>
    </button>
    <ul class="dropdown-menu">
	<li class="nav-item "><a href="<?= base_url() ?>Detail_user"><i class="fas fa-user"></i> Account</a></li>

</a>	<li class="nav-item "><a href="<?= base_url() ?>Edit_user"><i class="fas fa-cog"></i> Setting</a></li>
								 </a>      <li class="nav-item ">
	  <a class="nav-link" href="<?= base_url() ?>logout"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion </span></a>	
</li>

    </ul>
  </div>
  <li class="nav-item ">	
  <a class="nav-link" href=""> /  <span> Welcome : <?php echo $this->session->userdata('name');?> </span></a>	

</li>    
            
            </ul>
        </div>
    </div>
</nav>
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
					<input type="text" class="form-control" name="nom" id="nom" aria-describedby="helpId"
						placeholder="nom" value="<?= $item->nom;?>" required>
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


						<input  type="radio" name="gender" value="Male" <?php 
                              echo set_value('gender', $item->gender) =="Male"? "checked" : ""; 
                                 ?> /> Male
&nbsp;
						<input  type="radio" name="gender" value="Female" <?php 
                              echo set_value('gender', $item->gender) == "Female" ? "checked" : ""; 
                                  ?> /> Female


					</div>

				</div>

			</div>
			<div class="form-row">

				<div class="form-group col-md-12">
					<label>Image</label>
					<input type="file" class="form-control" id="userfile" name="userfile">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('photo', '<div class="error">', '</div>'); ?>
					</small>
				</div>

			</div>

			<h4 class="pt-2"><small> Information professionnel</small></h4>
			<hr>

			<div class="form-row">
				<div class="form-group col-md-4">
					<input type="text" value="<?= $item->service;?>" required class="form-control" id="service"
						name="service" placeholder="service">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('service', '<div class="error">', '</div>'); ?>
					</small>
				</div>
				<div class="form-group col-md-4">
					<input type="text" value="<?= $item->poste;?>" required class="form-control" id="poste" name="poste"
						placeholder="poste">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('poste', '<div class="error">', '</div>'); ?>
					</small>
				</div>
				<div class="form-group col-md-4">
					<input type="text" value="<?= $item->salaire;?>" required class="form-control" id="salaire"
						name="salaire" placeholder="salaire">
					<small id="helpId" class="form-text text-muted">
						<?php echo form_error('salaire', '<div class="error">', '</div>'); ?>
					</small>
				</div>

			</div>
			<center>


				<input type="submit" class="btn btn-success " style="margin-right: 10px;" value="valider">
				<!-- TODO BUTTON RETOUR EN ARRIERE  -->
				<button onclick="location.href='<?= base_url() ?>affichage'"    class="btn btn-info " style="margin-right: 10px;"  type="button">
				Anuuler
         </button>
			</center>



		</form>
	</div>





</div>
