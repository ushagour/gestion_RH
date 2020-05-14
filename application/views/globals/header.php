<!DOCTYPE html>
<html lang="en">

<head>
	<title>GESTION RH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
  <script type="text/javascript" src="<?=base_url()?>assets/js/fontawesome.min.js"></script> 
-->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

	 <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script> 



	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>



	<!-- custem files -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/MsJs.js"></script>
	<link href="<?=base_url()?>assets/css/MyCss.css" rel="stylesheet">
</head>

<body onload="myFunction()">

	<div id="loader">
	</div>
	<main id="page" style="display:none;">
		<div class="container-fluid">
			<div class="row content">
				<div class="col-md-3 sidenav">
					<h4>gestion RH : <small>mr </small> <button type="button" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-log-out"></span> Log out
						</button></h4>
						<ul class="navbar-mobile__list list-unstyled">
					
                        <li class="has-sub <?php if($this->session->userdata('menu') =="home")echo "active"; else  echo " ";?>">
						<a href="<?=base_url()?>home">
								<i class="fas fa-home mr-3"></i> Home</a>
                       
						</li>

                        <li class="has-sub <?php if($this->session->userdata('menu') =="ajouter") echo "active"; else " ";?>">
						<a  href="<?=base_url()?>ajouter">
            <i class="fas fa-user-plus mr-3"></i> 	Ajouter </a>
                        </li>
					   
						
                        <li class="has-sub <?php if($this->session->userdata('menu') == "edit")echo "active"; else " ";?>">
						<a href="<?=base_url()?>edit">
            <i class="fas fa-edit mr-3"></i>   editier </a>
						</li>
						

                   </ul>
<br>




				</div>
