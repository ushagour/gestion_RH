<div class="breadcome-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcome-list">
					<div class="row">
						<div class="single-pro-review-area">
							<div id="myTabContent" class="tab-content custom-product-edit">
								<div class="product-tab-list tab-pane fade active in" id="description">
									<div class="row">
										<div class="col-md-12 ">
											<div class="col-md-2 ">
											</div>
											<div class="col-md-8">
												<form action="<?php echo base_url()?>add-categories" method="Post">

													<div class="review-content-section">
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="fa fa-user"
																	aria-hidden="true"></i></span>
															<input type="text" name="name" class="form-control"
																placeholder="Catégories" require>

														</div>

													</div>
													<center>
														<button type="submit" class="btn btn-primary">Ajouter
															Catégorie</button>
													</center>
												</form>
											</div>
											<div class="col-md-2 ">


											</div>


										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row"  id="o" >
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="breadcome-list">
				<div class="row">
					<div class="col-lg-12 ">
						<div class="col-lg-2">
						</div>
						<div class="col-md-8 ">
						<div  class="product-status-wrap">
								<div class="sparkline8-graph">
									<div class="static-table-list">

										<table class="table  table-inverse table-responsive">
											<thead class="thead-inverse">
												<tr>
													<th>Désignation</th>
													<th style="text-align:right">Action</th>

												</tr>
											</thead>

											<tbody>
												<?php foreach($fs_cats as $fs_cat):?>
												<tr style="text-align:right">
													<td><?php echo $fs_cat->name ;?></td>


													<td style="text-align:right">

														<!-- <a href="<?=base_url()?>Dashboard/edite_fs_cat/<?php echo $fs_cat->id ;?>" class="pd-setting-ed" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
														<button onclick="del(<?php echo $fs_cat->id ;?>)" type="button" class="btn btn-info"><i class="fa fa-trash-o"
																aria-hidden="true"></i></button>

													</td>
												</tr>


												<?php endforeach;?>
											</tbody>



										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script>
		 function del(id) {

			jQuery.ajax({
				type: "GET",
				url: "<?php echo base_url();?>delete-categories/"+ id,
			
				success: function (data) {
				$('#o').load(location.href+" #o");
				// console.log(data);
				},error: function (data) {
 alert("impression impossible !");
    }
			});

		}

	</script>
