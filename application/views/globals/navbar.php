<div id="content">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">

			<button type="button" id="sidebarCollapse" class="btn btn-info">
				<i class="fas fa-align-left"></i>

			</button>
			<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<i class="fas fa-align-justify"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav navbar-nav ml-auto">

             <?php if($this->session->userdata('is_super_admin')): ?>
					<div class="dropdown" id="notif">

						<button type="button" class="btn btn-primary noti"   id="navbarDropdownMenuLink-5" aria-haspopup="true" aria-expanded="true"type="button" data-toggle="dropdown">
							<i class="fas fa-bell"></i>
							<span class="badge badge-light"><?=  ($this->User_model->git_notifications("add"));?></span>
						</button>


            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary noti" aria-labelledby="navbarDropdownMenuLink-5">
			<?php for($i = 1; $i <=$this->User_model->git_notifications("add"); $i++):?>

              <a class="dropdown-item " href="#"><i class="fas fa-bell danger"></i>  &nbsp;un personnel a été ajouté!  </a>
			  <?php endfor; ?>

            </div>

					</div>
<?php endif; ?>
					&nbsp;
		 			&nbsp;


					<div class="dropdown">

						<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
							<i class="fas fa-user-cog"></i>
						</button>

						<ul class="dropdown-menu">
							<li class="nav-item "><a href="<?= base_url() ?>Detail_user"><i class="fas fa-user"></i>
									Account</a></li>

							<li class="nav-item "><a href="<?= base_url() ?>Edit_user"><i class="fas fa-cog"></i>
									Setting</a></li>
							<li class="nav-item ">
								<a class="nav-link" href="<?= base_url() ?>logout"><i class="fas fa-sign-out-alt"></i>
									<span> Déconnexion </span></a>
							</li>

						</ul>
					</div>
					<li class="nav-item ">
						<a class="nav-link" href=""> / <span> Bonjour : <?php echo $this->session->userdata('name');?>
							</span></a>

					</li>


				</ul>
			</div>
		</div>
	</nav>
<script>
setInterval(() => {
	console.log("tb3");
	
	$("#notif").load(location.href + " #notif");
}, 10000);

</script>