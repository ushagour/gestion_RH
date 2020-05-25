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
		<h4><small> Modifie  d'utulisateur  </small></h4>
		<hr>

        <div class="card">
  <h5 class="card-header">Profil</h5>
  <div class="card-body">
    <p class="card-text">Gérez vos informations, ainsi que la confidentialité et la sécurité de vos données pour profiter au mieux des services RH.</p>
    <form action="<?php echo base_url();?>update" enctype="multipart/form-data" method="post">


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" value="<?= $user->nom_user?>" name="nom" id="nom" required>
	<small id="nom" class="form-text text-muted">
						<?php echo form_error('nom', '<div class="error">', '</div>'); ?>
					</small>
    </div>
    <div class="form-group col-md-6">
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control" value="<?=$user->prenom_user; ?>" name="prenom" id="prenom" required>
	<small id="prenom" class="form-text text-muted">
						<?php echo form_error('prenom', '<div class="error">', '</div>'); ?>
					</small>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" value="<?= $user->email; ?>" name="email" id="email" >
	<small id="email" class="form-text text-muted">
						<?php echo form_error('email', '<div class="error">', '</div>'); ?>
					</small>
    </div>
    <div class="form-group col-md-6">
      <label for="role">Role</label>
      <input type="role" class="form-control" value="<?= $user->role; ?>" name="role" id="role" required>
	<small id="role" class="form-text text-muted">
						<?php echo form_error('role', '<div class="error">', '</div>'); ?>
					</small>
    </div>
  </div>
  <div class="form-group">
    <label for="login">  login </label>
    <input type="text" class="form-control" id="login" value="<?= $user->login_user; ?>"  name="login" placeholder="login" required>
 	<small id="login" class="form-text text-muted">
						<?php echo form_error('login', '<div class="error">', '</div>'); ?>
					</small> 
  </div>
  <div class="form-group">
    <label for="oldpassword"> Old Password</label>
    <!-- //to do kiifach ndecripti pass bach ytl3  -->
    <input type="text" class="form-control" id="oldpassword" name="oldpassword" value="<?= $user->pass_user; ?>" placeholder="*****" required>
  </div>
  <div class="form-group">
    <label for="newpassword"> New Password</label>
    <input type="text" class="form-control" id="newpassword" name="newpassword" placeholder="*****" required>
  </div>
  <div class="form-group">
    <label for="conferm"> Conferm New password</label>
    <input type="text" class="form-control" id="conferm" name="conferm" placeholder="*******">
  </div>


  <button type="submit" class="btn btn-primary">Save changed</button>
</form>
  </div>
</div>

	


	</div>
</div>

<script>

$("#conferm").keyup(function(){
 
var pass= document.getElementById("newpassword").value;
var pass2= document.getElementById("conferm").value;

if (pass==pass2) {
    $("#conferm,#newpassword").css("border-color", "green");
}
else{
    $("#conferm,#newpassword").css("border-color", "red");
}


//  $("#conferm,#password").css("border-color", "red");
});



</script>