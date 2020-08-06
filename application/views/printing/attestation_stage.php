<!DOCTYPE html>
<html lang="en">

<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favilogo.png">

	<title>Gestion RH</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/printing/printing_attestation.css">

	

</head>

<body>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="titel"><u>ATTESTATION DE STAGE</u></h3>            
<div>
	<?php  foreach ($infos as $item):   ?>

<p>  &nbsp;&nbsp; Je soussigné <B>Mr ELDIRISI BOUZAIDI </B>,Atteste que a  <b><?= ($item->gender="Male")? "Mr. ":"Me. ";  echo $item->nom ." ".$item->prenom?></b>  
 titulaire de la CIN n° <b><?=$item->CIN?></b>
 a effectué un stage dans notre établissement du agissant en qualité de <b><?=$item->poste?></b>
du  <b>date</b> au  <b>date</b> </p>

<p>
Cette attestation est délivrée à l’intéressé (e) pour servir et valoir ce que de droit.	</p>
     
	<?php endforeach;?>
</div>

	
<div class="instruction">
<b><p><?= 'A Rabat, Le : '.date("d-m-Y",strtotime(date('Y-m-d'))); ?>
</p></b>

</div>
		
		<!-- ************************************ -->


</body>

</html>
