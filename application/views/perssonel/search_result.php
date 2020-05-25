
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



      <h4><small> resultat du recherch  </small></h4>
      <hr>
  

       
      <section class="panel">
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

	  <br>
									</header>
            <div class="panel-body" id="o">


		<?php	if(isset($serch)) { ?>

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
					
					
					
					foreach($serch as $item):?>
										<tr>
								           <td><?=$item->id;?></td>
											<td><?=$item->nom;?></td>
											<td><?=$item->prenom;?></td>
                                             <td><?=$item->gender;?></td>
										    	<td><?=$item->CIN;?></td>
											
                    

											<td class="actions">
											<!-- <a class="bg-circle bg-primary" data-toggle="modal" href="#myModal1<?=$item->id;?>"> -->





												
												<a href="#detaimodal<?=$item->id;?>"  data-toggle="modal" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
												&nbsp;
												<button onclick="del(<?=$item->id;?>)" class="btn btn-danger"><i class="fas fa-trash"></i></button>
												&nbsp;
												<a href="<?=base_url()?>edit-personnel/<?php echo $item->id ;?>" class="btn btn-info"><i class="fas fa-user-edit"></i></a>

											</td>
										</tr>
										<?php endforeach;?>
				
									</tbody>
								
                                    
                                    </table>
                                    <center>
						<?php echo $links; ?>

						<p style="text-align:right!important;">
							<smal><?php echo $nbr_page; ?></small>
						</p>

					</center>
                                </div>
								<?php } ?>
            </div>

            
        </section>
		
	
   
	 </div>
	</div>
	
<script>
function del(id) {
		console.log(id)
		jQuery.ajax({
			type: "GET",
			url: "<?php echo base_url();?>delete-personnel/"+ id ,

			success: function (data) {
				$('#o').load(location.href + " #o");


				console.log(data);
			},
			error: function (data) {
				 alert("erreur !");
			}
		});

	}

					</script>





<!-- modal small -->
<!-- <div class="modal fade" id="myModal119" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
                          
                                    </div>
                                    <div class="card-footer">
                                        <strong class="card-title mb-3">Profile Card</strong>
                                    </div>
                                </div>
						</div>
					
					</div>
				</div>
			</div> -->
			<!-- end modal small -->		
