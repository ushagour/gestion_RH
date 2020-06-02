
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

