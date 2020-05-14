
    <div class="col-md-9">


<center><h2> Formulaire ajouter </h2></center>




      <h4><small> information  personnel !</small></h4>
      <hr>
  <div>
  <style>
		.error {
			color: red;
		}
	</style>
  <form action="<?php echo base_url();?>ajouter" enctype="multipart/form-data" method="post"
					class="needs-validation" novalidate>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inpo">nom</label>
							<input type="text" class="form-control" name="nom" id="" aria-describedby="helpId"
								placeholder="nom" required>
							<small id="helpId" class="form-text text-muted">
								<?php echo form_error('nom', '<div class="error">','</div>'); ?>
							</small>
						</div>
						<div class="form-group col-md-4">
							<label for="prenom">Prenom</label>
							<input type="text" class="form-control" id="inputprenom" name="prenom" placeholder="prenom"
								required>
							<small id="helpId" class="form-text text-muted">
								<?php echo form_error('prenom', '<div class="error">', '</div>'); ?>
							</small>
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4">Date de naissance</label>
							<input type="date" class="form-control" id="inputage" name="dn" placeholder="" required>
							<small id="helpId" class="form-text text-muted">
								<?php echo form_error('dn', '<div class="error">', '</div>'); ?>
							</small>
						</div>


					</div>

					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="cin">CIN </label>
							<input type="text" required class="form-control" id="cin" name="cin"
								placeholder="CIN">
							<small id="helpId" class="form-text text-muted">
								<?php echo form_error('cin', '<div class="error">', '</div>'); ?>
							</small>
						</div>
						<div class="form-group col-md-4">
							<label for="tel"> Numero de telephone </label>
							<input type="text" required class="form-control" id="tel" name="tel"
								placeholder="060000000">
							<small id="helpId" class="form-text text-muted">
								<?php echo form_error('tel', '<div class="error">', '</div>'); ?>
							</small>
						</div>
            <div class="form-group col-md-6">
						<label for="inputAddress">Address</label>
						<input type="text" required class="form-control" id="inputAddress" name="adresse"
							placeholder="1234 Main St">
						<small id="helpId" class="form-text text-muted">
							<?php echo form_error('adresse', '<div class="error">', '</div>'); ?>
						</small>
					</div>

					</div>
    
					<div class="form-row">
          <div class="form-group col-md-12">

		  <div class="form-check">
		       <input id="gender" name="gender" type="radio"
                 class=""
                 value="Male" />
                <label for="gender" class="">Male</label>

                <input id="gender" name="gender" type="radio"
				 class=""
				 value="Female" />
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
							<label for="service">service </label>
							<input type="text" required class="form-control" id="service" name="service"
								placeholder="service">
							<small id="helpId" class="form-text text-muted">
								<?php echo form_error('service', '<div class="error">', '</div>'); ?>
							</small>
						</div>
						<div class="form-group col-md-4">
							<label for="poste"> Poste </label>
							<input type="text" required class="form-control" id="poste" name="poste"
								placeholder="poste">
							<small id="helpId" class="form-text text-muted">
								<?php echo form_error('poste', '<div class="error">', '</div>'); ?>
							</small>
						</div>
            <div class="form-group col-md-4">
						<label for="salaire">salaire</label>
						<input type="text" required class="form-control" id="salaire" name="salaire"
							placeholder="salaire">
						<small id="helpId" class="form-text text-muted">
							<?php echo form_error('salaire', '<div class="error">', '</div>'); ?>
						</small>
					</div>

					</div>
<center> 
<input type="submit" class="btn btn-primary " style="margin-right: 10px;" name="ok"
						value="ajouter">
       </center>
				
           
        
				</form></div>
    

      
      
   
    </div>

