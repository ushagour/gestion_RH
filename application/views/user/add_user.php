<div class="col-md-12">
		<h4><small>  Ajouter Utilisateur </small></h4>
		<hr>
<?php if ($this->session->flashdata('success')) {?>
    <div class="alert alert-primary" role="alert">
      <strong>User added successfuly </strong>
    </div>

<?php }elseif ($this->session->flashdata('error')) {?>
    <div class="alert alert-danger" role="alert">
      <strong>Erreur </strong>
    </div>
<?php }?>

        <div class="card">
  <div class="card-body">
    <p class="card-text"> Remplaire  vos informations, ainsi que la confidentialité et la sécurité de vos données pour profiter au mieux des services RH.</p>
    <form action="<?php echo base_url();?>add_user" enctype="multipart/form-data" method="post">


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control"  name="nom" id="nom" required>
	<small id="nom" class="form-text text-muted">
						<?php echo form_error('nom', '<div class="error">', '</div>'); ?>
					</small>
    </div>
    <div class="form-group col-md-6">
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control"  name="prenom" id="prenom" required>
	<small id="prenom" class="form-text text-muted">
						<?php echo form_error('prenom', '<div class="error">', '</div>'); ?>
					</small>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" >
	<small id="email" class="form-text text-muted">
						<?php echo form_error('email', '<div class="error">', '</div>'); ?>
					</small>
    </div>
    <div class="form-group col-md-6">
      <label for="role">Role</label>
      <input type="text" class="form-control" name="role" id="role" required>
	<small id="role" class="form-text text-muted">
						<?php echo form_error('role', '<div class="error">', '</div>'); ?>
					</small>
    </div>
  </div>
  <div class="form-group">
    <label for="login">  login </label>
    <input type="text" class="form-control" id="login"  name="login" placeholder="login" required>
 	<small id="login" class="form-text text-muted">
						<?php echo form_error('login', '<div class="error">', '</div>'); ?>
					</small> 
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="password" name="password" placeholder="*****" required>
    <small id="password" class="form-text text-muted">
						<?php echo form_error('password', '<div class="error">', '</div>'); ?>
					</small> 
  </div>
  <div class="form-group">
    <label for="conferm"> Conferm  password</label>
    <input type="text" class="form-control" id="conferm" name="conferm" placeholder="*******">
  </div>


  <button type="submit" class="btn btn-primary">Valider</button>
</form>
  </div>
</div>

	


	</div>
</div>

<script>

$("#conferm").keyup(function(){
 
var pass= document.getElementById("password").value;
var pass2= document.getElementById("conferm").value;

if (pass==pass2) {
    $("#conferm,#password").css("border-color", "green");
}
else{
    $("#conferm,#password").css("border-color", "red");
}


//  $("#conferm,#password").css("border-color", "red");
});



</script>