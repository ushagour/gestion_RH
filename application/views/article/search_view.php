<!-- <div class="product-status mg-b-5 container-fluid">
	<div class="product-status-wrap" style="background: #147cfe;padding-bottom: 0px;padding-top: 0px;">
  <h2><center>Synthèse des informations</center></h2>
  </div>
  </div> -->


<div class="product-status mg-b-30">
	<div class="container-fluid">
		<div class="row" id="o">
		<div class="breadcome-list single-page-breadcome">
				<div class="row">
					<div class="col-md-12 ">
						<div class="col-md-8">

							<form action="<?php echo base_url()?>search-articles" enctype="multipart/form-data"
								method="POST">
								<div class="col-md-3" style="margin-top: 20px;">

									<div class="form-group">


									
									
									<input type="date" aria-label="Search" class="form-control mx-sm-3 " name="search_date"
										id="search_date" id="dt"  >

									</div>

								</div>
								<div class="col-md-3" style="margin-top: 20px;">


									<div class="form-group">

									<input type="text" name="search_mot" id="search_mot"
										value="<?php if (isset($_POST['search_mot'])){echo $_POST['search_mot'];}?>"
										placeholder="Chercher..." class="form-control" >

									</div>


								</div>


								<div class="col-md-2" style="margin-top: 20px;">
									<button type="submit"
										class="btn btn-primary"><i
											class="fa fa-search"></i></span> </a>

									</button>
								</div>
							</form>

						</div>


						<div class="col-md-4 " style="margin-top: 20px;">
							<center>
								<h3 id="date_fr"></h3>
							</center>

						</div>

					</div>

				</div>


			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="product-status-wrap">
					<h2>
						<center>Recherch</center>
					</h2>


					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="20%">
									<center>Catégorie</center>
								</th>
								<th>
									<center>Synthèse</center>
								</th>
								<th width="20%">
									<center>Actions</center>
								</th>
							</tr>
						</thead>


						<tbody>

							<?php foreach ($serch as $row): ?>
							<tr>
								<td style="text-transform: capitalize !important;">
									<b>
										<i style="color:#10b7e4 !important; "
											class="fa big-icon fa-chevron-right icon-wrap"></i>&ensp;<?= $row->fc_name;?>
										<br />&ensp;&ensp;&ensp;<i style="font-size: 20px;color:#10b7e4  !important; "
											class="fa fa-angle-double-right icon-wrap"></i>
										<?= $row->fsc_name;?>
									</b>
								</td>
								<td>
									<p style=" text-align: justify; "><?= $row->synthese;?> </p>
									<?php if($row->mesure_prise != ""):?>

									<b style="color:#2196f3;">Mesures prises : </b>
									<p><?= $row->mesure_prise;?> </p>
									<?php endif;?>
									<p style="text-align: right;">
										(<b>Lieu</b> : <span style="color:#2196F3;"><?= $row->lieu;?></span>,
										<b>Source</b> : <span style="color:#2196F3;"><?= $row->source;?></span>,
										<b>Date</b> : <span
											style="color:#2196F3;"><?=date_format(date_create($row->date_evenement),"d-m-Y");?></span>
										)
									</p>
								</td>

								<td>
									<center>
							

										<?php if($row->piece_joint!=""):?>
										<a href="<?=base_url()?>assets/files/<?php echo $row->piece_joint ;?>"
											class="btn btn-warning"><i class="fa fa-paperclip"
												aria-hidden="true"></i></a>
										<?php endif;?>
									</center>

								</td>
							</tr>

							<?php endforeach; ?>

						</tbody>
					</table>
					<center>
						<?php echo $links; ?>

						<p style="text-align:right!important;">
							<smal><?php echo $nbr_page; ?></small>
						</p>

					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<SCript>
function shoxdate() {
		var d = new Date();

		var days_fr = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
		var monts_fr = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre",
			"Novembre", "Decembre"
		];



		var H = (d.getHours() < 10) ? "0" + d.getHours() : d.getHours(); //if(cond)?do this instruction else : 
		var M = (d.getMinutes() < 10) ? "0" + d.getMinutes() : d.getMinutes();
		var S = (d.getSeconds() < 10) ? "0" + d.getSeconds() : d.getSeconds();



		$("#date_fr").text(days_fr[d.getDay() - 1] + ' ' + d.getDate() + ' ' + monts_fr[(d.getMonth())] +
			' ' + d.getFullYear() + ' - ' + H + ':' + M + ':' + S);

		// console.log( H +':'+ M);
	}
	$(document).ready(function () {
		//console.log('ready');
		var gghg = setInterval(function () {
			shoxdate();
			// console.log('ready');
		}, 500);
	});

</SCript>

