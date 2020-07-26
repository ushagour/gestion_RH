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
<h3 id="titel"><u>ATTESTATION DE TRAVAIL</u></h3>            
<div>
	<?php  foreach ($infos as $item):   ?>

<p>  &nbsp;&nbsp; Je soussigné , agissant en qualité de <b><?=$item->poste?></b> de l’entreprise (GESTION RH)
certifie que <br> <b><?= ($item->gender="Male")? "Mr. ":"Me. ";  echo $item->nom ." ".$item->prenom?></b> 
titulaire de la CIN n° <b><?=$item->CIN?></b>
demeurant à <b><?=$item->Address?></b>
a été <?= ($item->gender="Male")? "employé ":"employée ";?> du  <b>date</b> au  <b>date</b> </p>

<p>Le solde du nombre d'heures acquises et non utilisées par  <b><?= ($item->gender="Male")? "Mr. ":"Me. ";  echo $item->nom ." ".$item->prenom?></b> au titre du droit individuel à la formation est égal à  <b>300DH</b> /jour .

</p>
<p>
La somme correspondant à ce solde est égale à <b><?=$item->salaire?> DH </b>.
<p>
L’organisme paritaire collecteur agréé (OPCA) dont l’entreprise relève est : <b> 1000 DH </b></p>
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
