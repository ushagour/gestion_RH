
<div id="content">

<div class="col-md-12">



      <h4><small> Liste du Personnel </small></h4>
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

	  </form>	<div style="text-align: right!important;     padding-bottom: 5px; <?= ($this->session->userdata('is_check'))?"display: none;":" " ?>  ">
			<a href="<?=base_url()?>print-etat" target="_blank" class="btn btn-info btn-flat"
					style=" border-radius: 30px; "><i class="fa fa-print"></i><b>&nbsp;Imprimer</b></a>
							</div>

	  <br>
									</header>
            <div class="panel-body" id="o">


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





												
												<a href="#detaimodal<?=$item->id;?>"  data-toggle="modal" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
												<button onclick="del(<?=$item->id;?>)" class="btn btn-danger"><i class="fas fa-trash"></i></button>
												<a href="<?=base_url()?>edit_personnel/<?php echo $item->id ;?>" class="btn btn-info"><i class="fas fa-user-edit"></i></a>

											<button
											onclick="valider_ar(<?php echo $item->id ;?>,<?php echo $item->checked ;?>)"
											class="btn btn-<?= ($item->checked)?"success":"dark" ?>"><i
												class="fa fa-check" aria-hidden="true"></i></button>
											
												<a href="<?=base_url()?>print_personnel/<?php echo $item->id ;?>"
											class="btn btn-warning"><i class="fas fa-file-pdf"
												aria-hidden="true"></i></button></a>

											</td>
										</tr>
										<?php endforeach;?>
				
									</tbody>
								
                                    
                                    </table>
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

	function valider_ar(id, state) {
		console.log(id, state)
		jQuery.ajax({
			type: "GET",
			url: "<?php echo base_url();?>check/" + id + "/" + state,

			success: function (data) {
				$('#o').load(location.href + " #o");


				console.log(data);
			},
			error: function (data) {
				//  alert("impression impossible !");
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
