
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?=base_url()?>Home"><img class="main-logo" src="<?=base_url()?>assets/img/logo/logo.png" alt="" /></a>
                <strong><img src="<?php echo base_url() ?>assets/img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
            <i  style=" color: #ffffff !important; "  class="fa big-icon fa-user icon-wrap"></i> 
            : nom utilisateur <?=$this->session->userdata('name');?>
          		
            	</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="" href="<?=base_url()?>afficher-synthese">
                            <i  style=" color: #00acee !important; "  class="fa big-icon fa-home icon-wrap"></i>
								   <span> Afficher Synthèse </span>
								</a>
                    
                        </li>
                        <li class="">
                         <a class="" href="<?=base_url()?>article">
                         <i style=" color: #3b5998 !important; "  class="fa big-icon fa-plus-circle icon-wrap"></i>
                         <!-- style=" color: #1cf704 !important; " -->
								   <span>Ajouter Evènement </span>
								</a>
                        </li>
                        <li class="">
                            <a class="" href="<?=base_url()?>logout">
								   <i  class="fa big-icon fa-sign-out icon-wrap"></i>
								   <span> Déconnexion </span>
								</a>
                    
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    
    <!--  -->
    <div class="all-content-wrapper">
        <div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo base_url() ?>Home">
                        <img class="main-logo" style="width: 100%;" src="<?php echo base_url() ?>assets/img/logo/banner.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            
        
        </div>
		 <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                <ul class="metismenu" id="menu1">
                          <li class="active">
                            <a class="" href="<?=base_url()?>afficher-synthese">
                            <i style=" color: #00acee !important; "  class="fa big-icon fa-home icon-wrap"></i>
								   <span> Afficher Synthèse </span>
								</a>
                    
                        </li>
                    
                    
                        <li class="">
                         <a class="" href="<?=base_url()?>article">
                         <i style=" color: #3b5998 !important; "  class="fa big-icon fa-plus-circle icon-wrap"></i>
                         <!-- style=" color: #1cf704 !important; " -->
								   <span>Ajouter Evènement </span>
								</a>
                        </li>
                        <li class="">
                            <a class="" href="<?=base_url()?>login">
								   <i  class="fa big-icon fa-sign-out icon-wrap"></i>
								   <span> Déconnexion </span>
								</a>
                    
                        </li>
                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
