<!DOCTYPE html>
<html lang="en">

<html lang="en">

<head>
	<meta charset="utf-8" />
	<script type="text/javascript" src="<?=base_url()?>assets/js/pdf.js"></script>

	<title>Gestion RH</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/printing/printing_etat.css">

</head>

<body onload='print()'>
	<div id="page">

		<!-- Presse-------------------------------------------------------------------------------------------------------------->


		<!-- <div id="newPage" style="page-break-before: always;margin-bottom:25px"></div> -->

		<table style="width:100%;margin-bottom:50px;padding-top:20px !important">
			<tr>
				<!-- <td style="vertical-align: top;width:40%;">


				</td> -->
				<th style="margin-left :0px;width:35%;">
					<h3><u> LISTE DES PERSONNEL </u></h3>
				</th>
				<th style="margin-left :0px;font-size: 13px;width:25%;vertical-align: top"><strong>

				

					</strong>
				</th>
			</tr>
		</table>

		<!-- ************************************ -->
		<table id="mytable" class="enteteTab" border="1" style="width:100%; border-collapse: collapse;">
		
		</table>
		<!-- ************************************ -->


		<!-- ************************************ -->

		<table  id="mytable" border="1" style="width:100%; border-collapse: collapse;">

		<theader>
				<tr class="listHeading">
					<th style="width:10%; border: 1px solid black;"> cin</th>
					<th style="width:30%; border: 1px solid black;">nom</th>
					<th style="width:30%; border: 1px solid black;"> prenom</th>
					<th style="width:30%; border: 1px solid black;"> telephone</th>
				</tr>
			</theader>

			<tbody>


<?php foreach($infoperssonel as $row): ?>



				<!-- <tr>
					<td colspan="3">

						<h4 style="color: #1b57c9; text-transform: uppercase;"><?= $art->fsc_name;?></h4>
					</td>

				</tr> -->

				<tr class="data" style="border: 1px solid #000000;">
				
					<td  style="width:10%;  solid black;">
						<p> <?= $row->CIN;?></p>
					</td>
					<td  style="width:30%;">
						<p> <?= $row->nom;?></p>
					</td>
					<td  style="width:30%; ">
						<p> <?= $row->prenom;?></p>
					</td>
					<td  style="width:30%; ">
						<p> <?= $row->telephone;?></p>
					</td>

	
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

<div class="instruction">
<b><p><?= 'A Rabat, Le : '.date("d-m-Y",strtotime(date('Y-m-d'))); ?>
</p></b>

</div>
		
		<!-- ************************************ -->


</body>

</html>