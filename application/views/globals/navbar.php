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
              
                
					<div class="dropdown">
				
					 <button type="button" class="btn btn-primary" type="button" data-toggle="dropdown">
					 <i class="fas fa-bell"></i>
					 <span class="badge badge-light">4</span>
                       </button>

						<ul class="dropdown-menu">
  <li class="list-group-item">Dapibus ac facilisis in</li>

  
  <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
  <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
  <li class="list-group-item list-group-item-success">This is a success list group item</li>

</ul>
					</div>

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
