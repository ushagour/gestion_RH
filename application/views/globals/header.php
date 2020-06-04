<!DOCTYPE html>
<html lang="en">

<head>
	<title>GESTION RH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favilogo.png">

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
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>


	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

	<!-- custem files -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/MsJs.js"></script>
</head>
<style>
	/* Center the loader */
	#loader {
		position: absolute;
		left: 50%;
		top: 50%;
		z-index: 1;
		width: 150px;
		height: 150px;
		margin: -75px 0 0 -75px;
		border: 16px solid #f3f3f3;
		border-radius: 50%;
		border-top: 16px solid #3498db;
		width: 120px;
		height: 120px;
		-webkit-animation: spin 2s linear infinite;
		animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
		0% {
			-webkit-transform: rotate(0deg);
		}

		100% {
			-webkit-transform: rotate(360deg);
		}
	}

	@keyframes spin {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	/* Add animation to "page content" */
	.animate-bottom {
		position: relative;
		-webkit-animation-name: animatebottom;
		-webkit-animation-duration: 1s;
		animation-name: animatebottom;
		animation-duration: 1s
	}

	@-webkit-keyframes animatebottom {
		from {
			bottom: -100px;
			opacity: 0
		}

		to {
			bottom: 0px;
			opacity: 1
		}
	}

	@keyframes animatebottom {
		from {
			bottom: -100px;
			opacity: 0
		}

		to {
			bottom: 0;
			opacity: 1
		}
	}

</style>

<body onload="myFunction()">

	<div id="loader">
	</div>


	<div id="page" style="display:none;">

		<div class="wrapper">

			<!-- Sidebar  -->
			<nav id="sidebar">
				<div class="sidebar-header">
					<h3>Gestion RH </h3>
				</div>

				<ul class="list-unstyled components">
					<!-- <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
				</li> -->

					<li>
						<a href="<?=base_url();?>home"> <i class="fas fa-home"></i> Home </a>
					</li>
					<li>
						<a href="<?=base_url();?>ajouter">
                        <i class="fas fa-plus"></i>
							<span>Ajouter</span></a>
					</li>

					<li>
						<a href="<?=base_url();?>affichage"> 
                        <i class="fas fa-suitcase"></i>						
                        	<span>Affichage</span></a>
					</li>
					<li>
                    <a href="<?=base_url();?>"> 
                    <i class="fas fa-comment-dots"></i>                    	<span>Contact</span></a>
					</li>
				</ul>

<?php if ($this->session->userdata('is_super_admin')) :?>
				<ul class="list-unstyled CTAs">
					<!-- <!-- <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li> -->
                <li>
                    <a href="<?=base_url();?>/Nouveau-Utilisateur" class="article">Nouveau-Utilisateur</a>
                </li> 
				</ul>
<?php endif;?>
			</nav>
