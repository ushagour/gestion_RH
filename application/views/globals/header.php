<!DOCTYPE html>
<html lang="en">

<head>
	<title>GESTION RH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favilogo.png">
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>

	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
		integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
	</script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
		integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
	</script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
		integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

	<!-- custem styles -->

	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/my_css.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/loading/loader.css">

    <!-- FullCalendar -->
	<link href='vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />


</head>


<body onload="myFunction()">

	<div id="loader">
	</div>


	<div id="page" style="display:none;">

		<div class="wrapper">

			<!-- Sidebar  -->
			<nav id="sidebar">
				<div class="sidebar-header">
					<h3>Gestion RH </h3>
					<span style="padding-left: 73px;"><?= 'Le : '.date("d-m-Y",strtotime(date('Y-m-d'))); ?></span>

				</div>

				<ul class="list-unstyled components">
	

					<li class="<?= ($this->session->userdata('page')=="home")?"active": "";?>">
						<a href="<?=base_url();?>home"> <i class="fas fa-home"></i> Home </a>
					</li>

					<li class="<?= ($this->session->userdata('page')=="ajouter")?"active": "";?>">
						<a href="<?=base_url();?>ajouter"> <i class="fas fa-plus"></i> Nouveau perssonel </a>
					</li>
			
					<li class="<?= ($this->session->userdata('page')=="affichage")?"active": "";?>">
						<a href="<?=base_url();?>affichage"> 
                        <i class="fas fa-suitcase"></i>						
                        	<span>Affichage</span></a>
					</li>
					<li class="<?= ($this->session->userdata('page')=="contact")?"active": "";?>">
                    <a href="<?=base_url();?>"> 
                    <i class="fas fa-comment-dots"></i>    	<span>Contact</span></a>
					</li>
				</ul>

				<!-- <ul class="list-unstyled CTAs">
				<li>
                    <a href="<?=base_url();?>"> 
                    <i class="fas fa-comment-dots"></i>    	<span>Contact</span></a>
					</li>
				</ul> -->
			</nav>
