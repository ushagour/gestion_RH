
    <div class="col-md-9">
      <h4><small> recherch personnel page </small></h4>
      <hr>
  

       
      <section class="panel">
            <header class="panel-heading">
			<form action="<?php echo base_url();?>edit" method="post">
			<div class="input-group">
			<input type="text" class="form-control" name="CIN" placeholder="Search personnel par cin ..">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>

	  </form>
									</header>
            <div class="panel-body">

		<?php	if(isset($infoperssonel)) { ?>

			<div class="table-responsive table--no-card m-b-30">
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
											<a class="bg-circle bg-primary" data-toggle="modal" href="#myModal1<?=$item->id;?>">

												<a href="#detaimodal<?=$item->id;?>"  data-toggle="modal" class=""><i class="far fa-eye"></i></a>
												<a href="#" class=""><i class="fas fa-user-edit"></i></a>
												<a href="#" class=""><i class="fas fa-user-trash"></i></a>

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
<!-- modal small -->
<div class="modal fade" id="myModal119" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                            <div class="location text-sm-center">
                                                <i class="fa fa-map-marker"></i> California, United States</div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <strong class="card-title mb-3">Profile Card</strong>
                                    </div>
                                </div>
						</div>
					
					</div>
				</div>
			</div>
			<!-- end modal small -->