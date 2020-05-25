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
		<h4><small> Informations d'utulisateur  </small></h4>
		<hr>

        <div class="card">
  <h5 class="card-header">Profil</h5>
  <div class="card-body">
    <p class="card-text">Consultez les données de votre compte RH.</p>
    <ul class="list-group">
  <li class="list-group-item"><B>Nom :</B> &nbsp; <?= $user->nom_user ." ".$user->prenom_user; ?></li>
  <li class="list-group-item"><B>login :</B> &nbsp; <?= $user->login_user; ?></li>
  <li class="list-group-item"><B>Email :</B> &nbsp; <?= $user->email; ?></li>
  <li class="list-group-item"><B>Role :</B> &nbsp; <?= $user->role; ?></li>
  <!-- <li class="list-group-item"><B>Nom :</B> &nbsp; Ali oucahagour</li> -->
 
</ul>
<br>

    <a href="<?= base_url()?>home" class="btn btn-primary">Go To home page </a>
  </div>
</div>

	


	</div>
</div>

