<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favilogo.png">

    <!-- Fontfaces CSS-->
    <link href="<?= base_url() ?>assets/css/login/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>assets/css/login/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <!-- <img src="images/icon/logo.png" alt="CoolAdmin"> -->
<h1>Gestion RH</h1>
                            </a>
                        </div>
                        <div class="login-form">



                            <form action="<?php echo base_url() ?>login" method="POST" id="loginForm">




                            <div class="form-group">
                            <label  for="username">Login</label>
                                    <input type="text" placeholder="Login" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                <label  for="password">Mot de passe</label>
                                    <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                        </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                  
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                             




                          

                            </form>
                            
                            
                            
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url() ?>/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url() ?>/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url() ?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url() ?>/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url() ?>/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url() ?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url() ?>/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url() ?>/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url() ?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url() ?>/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url() ?>/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url() ?>assets/js/login/main.js"></script>

</body>

</html>
<!-- end document-->