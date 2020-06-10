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

<!-- #region CSS -->

	<style>
		* {
			margin: 6px 6px 6px 6px;
		}

		body {
			font-family: "Calibri", Times, serif;
			padding-top: 25px;
			padding-bottom: 65px;
			height: 80%;
		}

		.headerblock img {
			float: right;
			width: 100px;
			border: 2px solid #000;
			border-radius: 5px;
		}

		.headerblock .textright {
			text-align: right;
		}

		.headerblock p {
			text-align: center;
		}

		.headerblock h1 {

			text-transform: uppercase;
			font-size: 20px !important;
			text-align: center;
		}

		.content {
			font-size: 2px;
		}

		.content .grandtitle {
			font-size: 25px;
			font-weight: bold;
			text-align: left;
			text-decoration: underline;
		}

		.content table td {
			font-size: 2px;
		}

		.footer {
			position: fixed;
			left: 0;
			bottom: 20px;
			width: 100%;
			text-align: center;
		}

		.page-number:after {
			content: counter(page);
			text-align: center;
		}

		.blocktable {
			display: inline-block;
			float: left;
		}

		.imagetable {
			display: inline-block;
			float: right;
		}

		.imagetable img {
			border: 1px solid #000;
		}

		.table tr {
			border-right: 1px solid #000;
		}

		.toptable {
			height: 80px;
		}

		.table {
			width: 100%;
			height: 80px;
		}

		thead th {
			border: 1.5px solid #333;
			color: #111111;
			font-size: 14px;
			padding: 3px;
		}



		table {
			page-break-before: auto;
		}

		.table tbody th {
			background: none repeat scroll 0 0 #E6E6E6;
			color: #333333;
		}

		#footer {
			position: fixed;
			bottom: -180px;
			left: 0px;
			right: 0px;
			text-align: center;
			color: red;
		}

		#footer .page:before {
			content: "Page "counter(page);
			color: #000;
		}

		#mytable th {
			background-color: #c5c3c3;
		}

		.data td {
			font-size: 15px !important;
		}

		th {
			text-align: center;
		}

		@media print {
			@page {
				margin-bottom: 10mm;
				size: auto;
			}

			body {
				margin-top: 1.2cm
			}

			tr.listHeading {
				-webkit-print-color-adjust: exact;
			}

			#Header,
			#Footer {
				display: none !important;
			}
		}

		table {
			page-break-inside: auto
		}

		tr {
			page-break-inside: avoid;
			page-break-after: auto
		}

		thead {
			display: table-header-group
		}

		tfoot {
			display: table-footer-group
		}

		body {
			margin: 0;
			padding: 10px !important;
		}


		.instruction {
			height: 100px;
			width: 100%;
			border: 1px solid #333;

			text-align: center!important;
			
		}

		/* @media print {
            .no-print {
                display: none ! important;
                width: 0;
                height: 0;
            }
        } */
	</style>
<!-- #endregion -->

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
			<tbody>
				<tr class="listHeading">
					<th style="width:7%; border: 1px solid black;"> cin</th>
					<th style="width:10%; border: 1px solid black;">nom</th>
					<th style="width:10%; border: 1px solid black;"> prenom</th>
					<th style="width:10%; border: 1px solid black;"> telephone</th>
				</tr>
			</tbody>
		</table>
		<!-- ************************************ -->


		<!-- ************************************ -->

		<table  id="mytable" border="1" style="width:100%; border-collapse: collapse;">



			<tbody>


<?php foreach($infoperssonel as $row): ?>



				<!-- <tr>
					<td colspan="3">

						<h4 style="color: #1b57c9; text-transform: uppercase;"><?= $art->fsc_name;?></h4>
					</td>

				</tr> -->

				<tr class="data" style="border: 1px solid #000000;">
				
					<td  style="width:7%;  solid black;text-align:center ">
						<p> <?= $row->CIN;?></p>
					</td>
					<td  style="width:10%; ">
						<p> <?= $row->nom;?></p>
					</td>
					<td  style="width:10%; ">
						<p> <?= $row->prenom;?></p>
					</td>
					<td  style="width:10%; ;text-align:center">
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