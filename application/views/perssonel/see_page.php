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

								 </a>	<li class="nav-item "><a href="<?= base_url() ?>Setting"><i class="fas fa-cog"></i> Setting</a></li>
      <li class="nav-item ">
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
		<h4><small> Liste du Personnel </small></h4>
		<hr>



		<section class="panel" id="tab">
			<header class="panel-heading">
				<form action="<?php echo base_url();?>search" method="post">
					<div class="input-group col-md-4">
						<input type="text" class="form-control" name="CIN" placeholder="Search personnel par cin ..">
						&nbsp;
						<div class="input-group-btn">

							<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> </button>
						</div>
					</div>

				</form>

				<div
					style="text-align: right!important;     padding-bottom: 5px; <?= ($canprint)?" ":"display: none;" ?>  ">
					<a href="<?=base_url()?>print-etat" target="_blank" class="btn btn-info btn-flat"
						style=" border-radius: 30px; "><i class="fa fa-print"></i><b>&nbsp;Imprimer</b></a>
				</div>

				<br>
			</header>
			<div class="panel-body">


				<?php	if(isset($infoperssonel)) { ?>

				<div class="table-responsive table--no-card table-dark m-b-30">
					<table class="table table-borderless table-striped table-earning">

						<thead>
							<tr>
								<th>id</th>
								<th>nom</th>
								<th>prenom</th>
								<th>sexe</th>
								<th>cin</th>
								<th>operation</th>


							</tr>
						</thead>
						<tbody>
							<tr class="gradeX">
								<?php 
					
					
					
					foreach($infoperssonel as $item):?>
							<tr>
								<td><?=$item->id;?></td>
								<td><?=$item->nom;?></td>
								<td><?=$item->prenom;?></td>
								<td><?=$item->gender;?></td>
								<td><?=$item->CIN;?></td>



								<td class="actions">
									<!-- <a class="bg-circle bg-primary" data-toggle="modal" href="#myModal1<?=$item->id;?>"> -->






									<a href="#detaimodal<?=$item->id;?>" data-toggle="modal"
										class="btn btn-secondary"><i class="fas fa-eye"></i></a>
									<button onclick="del(<?=$item->id;?>)" class="btn btn-danger"><i
											class="fas fa-trash"></i></button>
									<a href="<?=base_url()?>edit_personnel/<?php echo $item->id ;?>"
										class="btn btn-info"><i class="fas fa-user-edit"></i></a>

									<button onclick="valider_ar(<?php echo $item->id ;?>,<?php echo $item->checked ;?>)"
										class="btn btn-<?= ($item->checked)?"success":"dark" ?>"><i class="fa fa-check"
											aria-hidden="true"></i></button>

									<a href="<?=base_url()?>generateFPDF/<?php echo $item->id ;?>"
										class="btn btn-warning"><i class="fas fa-file-pdf"
											aria-hidden="true"></i></button></a>

								</td>
							</tr>
							<!-- todo nkmlo had modal dyal detail profile -->
							<div class="modal fade" id="detaimodal<?=$item->id;?>" tabindex="-1" role="dialog"
								aria-labelledby="smallmodalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel">Small Modal</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="card">
												<div class="card-body">
												
														<img src="<?= base_url() ?>assets/files/team2.jpg"  style="width:100%">
														
														<p class="title"> <?=$item->nom;?> <?=$item->prenom;?></p>
														<p>Harvard University</p>
													
														<p><button>Contact</button></p>
												
												</div>
												<div class="card-footer">
													<strong class="card-title mb-3">Profile Card</strong>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<?php endforeach;?>

						</tbody>


					</table>
				</div>
				<?php } ?>
			</div>


		</section>



	</div>
</div>

<!-- modal small -->

<!-- end modal small		 -->

<script>
	function del(id) {
		console.log(id)
		jQuery.ajax({
			type: "GET",
			url: "<?php echo base_url();?>delete-personnel/" + id,

			success: function (data) {
				$('#o').load(location.href + " #o");


				console.log(data);
			},
			error: function (data) {
				alert("erreur !");
			}
		});

	}

	function valider_ar(id, state) {
		console.log(id, state)
		jQuery.ajax({
			type: "GET",
			url: "<?php echo base_url();?>check/" + id + "/" + state,

			success: function (data) {
				$('#tab').load(location.href + " #tab");


				console.log(data);
			},
			error: function (data) {
				//  alert("impression impossible !");
			}
		});

	}
</script>