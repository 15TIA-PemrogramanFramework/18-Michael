<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UMDB - Universe's Movie Database</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url();?>/asset_login/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/asset_login/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/asset_login/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <!--link rel="shortcut icon" href="<?php echo base_url();?>/asset_login/ico/favicon.png" -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>/asset_login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>/asset_login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>/asset_login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/asset_login/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <?php $this->load->view('templates/navbar');?>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>U M D B</strong></h1>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
                                        </div>
                                        <button type="submit" class="btn">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                            
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Sign up now</h3>
                                        <p>Fill in the form below</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="<?=site_url('login/register');?>" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">Username</label>
                                            <input type="text" name="username" placeholder="Username" class="form-first-name form-control" id="form-first-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Password</label>
                                            <input type="text" name="password" placeholder="Password" class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Confirm Password</label>
                                            <input type="text" name="confpass" placeholder="Confirm Password" class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Name</label>
                                            <input type="text" name="nama" placeholder="Name" class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Birthday</label>
                                            <input type="text" name="ttl" placeholder="Birthday" class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="email" placeholder="Email" class="form-email form-control" id="form-email">
                                        </div>
                                        <button type="submit" class="btn">Sign Up</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="<?php echo base_url();?>/asset_login/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>/asset_login/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/asset_login/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url();?>/asset_login/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="<?php echo base_url();?>/asset_login/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>