<!DOCTYPE html>
<html lang="en">

<html lang="en">

<head>
	<meta charset="utf-8" />
	<script type="text/javascript" src="<?=base_url()?>assets/js/pdf.js"></script>

	<title>5° BUREAU / D.I</title>
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

		table td {
			padding: 5px;
		}

		.instruction {
			height: 100px;
			width: 100%;
			border: 1px solid #333;
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
				<td style="vertical-align: top;width:40%;">

					<?= 'A Rabat, Le : '.date("d-m-Y",strtotime(date('Y-m-d'))); ?>

				</td>
				<th style="margin-left :0px;width:35%;">
					<h3><u>POINT DE SITUATION </u></h3>
					<h4><u>VEILLE</u></h4>
				</th>
				<th style="margin-left :0px;font-size: 13px;width:25%;vertical-align: top"><strong>

						<!--
                        <u>ROYAUME DU MAROC </u><br>
                        <u>FORCES ARMEES ROYALES</u><br>
                        <u>ETAT MAJOR GENERAL</u><br>
                        5° BUREAU / D.I<br>
-->

						<!-- <a href="">N°..........</a> -->

					</strong>
				</th>
			</tr>
		</table>

		<!-- ************************************ -->
		<table id="mytable" class="enteteTab" border="1" style="width:100%; border-collapse: collapse;">
			<tbody>
				<tr class="listHeading">
					<th style="width:8%; border: 1px solid black;"><strong>PJ N°</strong></th>
					<th style="width:72%; border: 1px solid black;">Information</th>
					<th style="width:20%; border: 1px solid black;"> Date / Sources</th>
				</tr>
			</tbody>
		</table>
		<!-- ************************************ -->

		<?php
        $cpt= 1;
        foreach ($cats as $cat): ?>

		<?php $arts = ($arts = $this->Article_model->get_art_by_cat($cat->id));?>
	
		<?php if(empty($arts)):
             continue;
                 endif;?>

		<h3 style="color: #861010; color: #861010; text-transform: uppercase;"><u><?= ($cat->name) ?></u></h3>
		<!-- ************************************ -->

		<table id="mytable" border="1" style="width:100%; border-collapse: collapse;">



			<tbody>



				<?php 

$test_var = '';

foreach ($arts as $art): ?>
				<?php 

if($test_var != $art->id_sous_cat): 
    $test_var = $art->id_sous_cat;
?>
				<tr>
					<td colspan="3">

						<h4 style="color: #1b57c9; text-transform: uppercase;"><?= $art->fsc_name;?></h4>
					</td>

				</tr>
				<?php endif; ?>
				<tr class="data" style="border: 1px solid #000000;">
					<td style="width:8%; border: 1px solid black;text-align:center">
                    <?php if($art->piece_joint!=""):?>
                    <a style="color:red" target="_blank" href="<?=base_url()?>assets/files/<?php echo $art->piece_joint ;?>" class="btn btn-warning">
                    <b><?= $cpt++; ?></b>
                    </a>
                    <?php else:?>
                     <b><?= $cpt++; ?></b>
                    <?php endif;?>
                        
					</td>

					<td <?= (ord($art->synthese)<126)?'':'lang="ar" dir="rtl"'; ?>>
						<p>
							<?= ($art->synthese) ?>
						</p>
					</td>

					<td style="width:20%; border: 1px solid black;text-align:center">
						&nbsp;<?= $art->source;?><br><?=date_format(date_create($art->date_evenement),"Y-m-d");?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>


		<?php endforeach; ?>
		<!-- ************************************ -->


</body>

</html>