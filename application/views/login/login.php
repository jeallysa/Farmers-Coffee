<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JHCS Inc. | Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">

        <style>
            #hov:hover {
                color: black !important; 
            }
			.footer{
                z-index: 0;
                background:  rgba(6, 4, 6, 0.62);
                color: white;
				font-size:   13px;        
			}
        </style>

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        
                    </div>
                    <div class="row">
						
                        <div class="col-sm-6 col-sm-offset-3 form-box">
							<div>
                            	<img src="assets/img/0000.png" width="100%">	
                        		</div>
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>JHCS Login Form </h3>
                            		<p>Enter your username and password to log on:</p>
                                </div>
                                       
                                
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                                <?php
                                        $error = $this->session->flashdata('error');
                                        $success = $this->session->flashdata('success');
                                        if(!empty($error)){
                                            ?>
                                            <div class="alert alert-danger" style="margin-top: 100px;  text-align: center; ">
                                                <strong><?php echo $error; ?></strong> 
                                            </div>
                                      <?php } else if(!empty($success)){ ?>
                                            <div class="alert alert-success" style="margin-top: 100px;  text-align: center; ">
                                                <strong><?php echo $success; ?></strong> 
                                      <?php } ?> 
                            </div>
                            <div class="form-bottom">
                                <?php echo form_open('login/validate') ?>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="username">Username</label>
                                        <?php echo form_input(['name' => 'username', 'id' => 'username', 'placeholder' => 'Username' ,'class' => 'form-control']); ?>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Password</label>
                                        <?php echo form_password(['name' => 'password', 'id' => 'password', 'placeholder' => 'Password' ,'class' => 'form-control']); ?>
			                        </div>
                                    <div class="row" style="display: flex; align-items: center; justify-content: center;color: red">
                                      </div>  
			                        <button type="submit" class="btn btn-outline-secondary"><p style="color: black;">Sign in!</p></button>
                                <?php echo form_close(); ?>
                                <br>
                                <a href="<?php echo base_url(); ?>login/forgetPassword" style="color: white;" id="hov"> Forgot password?</a>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
			
		</div>
		<footer class="footer navbar navbar-fixed-bottom" >
                <div class="container">
                  <div class="copyright float-center">
                    <center>
                    &copy;
                    <a href="https://www.creative-tim.com" target="_blank">Creative Team</a>
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, made with <i class="glyphicon glyphicon-heart"></i> by
                        <a href="">Team Barako</a> for John Hay Coffee Services Incorporation.
                </center>
                  </div>
                </div>
			</footer>

        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>